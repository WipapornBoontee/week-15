# ใบงานที่ 15: พัฒนาระบบ RESTful Blog API พร้อมระบบยืนยันตัวตนด้วย Laravel Sanctum

คู่มือการทดสอบและเอกสารอ้างอิงตามสไลด์การเรียนรู้ สัปดาห์ที่ 15

---

## 📌 สรุปขั้นตอนที่ดำเนินการในโปรเจกต์

1. **ติดตั้ง API Scaffolding & Laravel Sanctum**:
   - รันคำสั่ง `php artisan install:api`
   - สร้างตาราง `personal_access_tokens` ผ่าน Migration เรียบร้อย
2. **User Model Trait**:
   - เพิ่ม `use Laravel\Sanctum\HasApiTokens;` ภายใน [User.php](file:///c:/Users/MASTER/Documents/GitHub/week-15/app/Models/User.php)
3. **ระบบยืนยันตัวตน (Authentication)**:
   - สร้าง [AuthController.php](file:///c:/Users/MASTER/Documents/GitHub/week-15/app/Http/Controllers/Api/AuthController.php) รองรับ `register`, `login`, และ `logout`
4. **Blog CRUD API & Resource Transformer**:
   - สร้าง [BlogResource.php](file:///c:/Users/MASTER/Documents/GitHub/week-15/app/Http/Resources/BlogResource.php) จัด Format วันที่ `created_at` / `updated_at` เป็น `Y-m-d H:i:s` และแปลงสถานะเป็น boolean
   - สร้าง [BlogController.php](file:///c:/Users/MASTER/Documents/GitHub/week-15/app/Http/Controllers/Api/BlogController.php) ด้วย flag `--api` รองรับ `index`, `store`, `show`, `update`, `destroy`
5. **การกำหนด Route ใน `routes/api.php`**:
   - แยก Public Routes และ Protected Routes (`auth:sanctum`) ตามข้อกำหนด

---

## 🚀 วิธีการทดสอบ API ผ่าน Postman

### การตั้งค่า Header มาตรฐาน (สำคัญมาก)
ในทุกคำขอ (Request) แนะนำให้ตั้งค่า Headers ดังนี้:
- `Accept`: `application/json`
- `Content-Type`: `application/json`

---

### 1. ทดสอบระบบ Authentication (Public Routes)

#### 1.1 สมัครสมาชิก (Register)
* **Method**: `POST`
* **URL**: `http://127.0.0.1:8000/api/register`
* **Headers**:
  * `Accept`: `application/json`
  * `Content-Type`: `application/json`
* **Body** (raw -> JSON):
  ```json
  {
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }
  ```
* **Expected Response (Status 201 Created)**:
  ```json
  {
    "status": "success",
    "message": "ลงทะเบียนสำเร็จ",
    "user": { ... },
    "token": "1|abcde..."
  }
  ```

#### 1.2 เข้าสู่ระบบ (Login)
* **Method**: `POST`
* **URL**: `http://127.0.0.1:8000/api/login`
* **Headers**:
  * `Accept`: `application/json`
  * `Content-Type`: `application/json`
* **Body** (raw -> JSON):
  ```json
  {
    "email": "john@example.com",
    "password": "password123"
  }
  ```
* **Expected Response (Status 200 OK)**:
  * จะได้รับ Plain Text Token สำหรับนำไปใช้ทดสอบ Protected Routes

---

### 2. ทดสอบ Protected Routes (ต้องแนบ Token)

> [!NOTE]
> ไปที่แท็บ **Authorization** ใน Postman -> เลือก **Type: Bearer Token** -> นำ Token ที่ได้จาก Login มาวาง

#### 2.1 ดึงข้อมูลผู้ใช้ปัจจุบัน (Current User)
* **Method**: `GET`
* **URL**: `http://127.0.0.1:8000/api/user`
* **Auth**: Bearer Token
* **Expected Response (Status 200 OK)**: ข้อมูล User ที่เข้าสู่ระบบ

#### 2.2 สร้างบทความใหม่ (Create Blog)
* **Method**: `POST`
* **URL**: `http://127.0.0.1:8000/api/blogs`
* **Auth**: Bearer Token
* **Body** (raw -> JSON):
  ```json
  {
    "title": "เรียนรู้ RESTful API กับ Laravel 11",
    "content": "เนื้อหาบทความใหม่สำหรับทดสอบบันทึกผ่าน API",
    "status": true
  }
  ```
* **Expected Response (Status 201 Created)**

#### 2.3 แก้ไขบทความ (Update Blog)
* **Method**: `PUT`
* **URL**: `http://127.0.0.1:8000/api/blogs/{id}`
* **Auth**: Bearer Token
* **Body** (raw -> JSON):
  ```json
  {
    "title": "เรียนรู้ RESTful API อัปเดตใหม่"
  }
  ```
* **Expected Response (Status 200 OK)**

#### 2.4 ลบบทความ (Delete Blog)
* **Method**: `DELETE`
* **URL**: `http://127.0.0.1:8000/api/blogs/{id}`
* **Auth**: Bearer Token
* **Expected Response (Status 200 OK)**

#### 2.5 ออกจากระบบ (Logout)
* **Method**: `POST`
* **URL**: `http://127.0.0.1:8000/api/logout`
* **Auth**: Bearer Token
* **Expected Response (Status 200 OK)**: Token ถูกยกเลิก หากนำ Token เดิมไปเรียก `/api/user` อีกจะได้รับ Status `401 Unauthorized`

---

### 3. ทดสอบ Public Routes สำหรับ Blog (ไม่ต้องมี Token)

#### 3.1 ดูรายการบทความทั้งหมด
* **Method**: `GET`
* **URL**: `http://127.0.0.1:8000/api/blogs`
* **Expected Response (Status 200 OK)**: ข้อมูลพร้อม Pagination (10 รายการต่อหน้า)

#### 3.2 ดูบทความตาม ID
* **Method**: `GET`
* **URL**: `http://127.0.0.1:8000/api/blogs/{id}`
* **Expected Response (Status 200 OK)**

---

### 4. ทดสอบกรณี Error Check (สำหรับเก็บคะแนนตามเกณฑ์ประเมิน)

* **401 Unauthorized**: ทดสอบเรียก `GET /api/user` โดยไม่แนบ Token หรือใช้ Token หลัง Logout
* **422 Unprocessable Entity**: ทดสอบเรียก `POST /api/register` โดยเว้นว่างข้อมูลใน Body (Laravel จะตอบกลับรายการ validation error เป็น JSON)
* **404 Not Found**: ทดสอบเรียก `GET /api/blogs/99999`
