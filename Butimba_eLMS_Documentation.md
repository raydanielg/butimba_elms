# Butimba Teacher's College — e-Learning Management System (eLMS)

## Software Documentation & System Specification

**College:** Chuo cha Ualimu Butimba (Butimba Teacher's College) — *"Juhudi na Maarifa"*
**Programme:** Distance Learning (Masomo kwa Njia ya Masafa) — 2026/2027
**Version:** 1.0
**Prepared for:** Office of the Principal, on behalf of the Permanent Secretary, MoEST
**Contacts:** www.butimbatc.ac.tz · principal@butimbatc.ac.tz · 0755 646138 / 0653 144677

---

## Table of Contents

1. [Introduction](#1-introduction)
2. [System Overview](#2-system-overview)
3. [User Roles and Access Control](#3-user-roles-and-access-control)
4. [System Structure (Site Map and Main Modules)](#4-system-structure-site-map-and-main-modules)
5. [Academic Structure (Programmes, Courses, Modules, Topics)](#5-academic-structure-programmes-courses-modules-topics)
6. [Functional Requirements by Role](#6-functional-requirements-by-role)
7. [Admission and Application Workflow](#7-admission-and-application-workflow)
8. [Registration, Payments and Fees](#8-registration-payments-and-fees)
9. [Assessment and Evaluation](#9-assessment-and-evaluation)
10. [Communication and Collaboration](#10-communication-and-collaboration)
11. [Media and Content Management](#11-media-and-content-management)
12. [Non-Functional Requirements](#12-non-functional-requirements)
13. [Data Model Overview](#13-data-model-overview-key-entities)
14. [Reports and Analytics](#14-reports-and-analytics)
15. [Assumptions, Constraints and Future Enhancements](#15-assumptions-constraints-and-future-enhancements)
- [Appendix A — Complete Page / Screen List](#appendix-a--complete-page--screen-list)
- [Appendix B — Sample Course Codes Reference](#appendix-b--sample-course-codes-reference)

---

## 1. Introduction

### 1.1 Purpose of this Document
This document is the complete software documentation and system specification for the electronic Learning Management System (eLMS) of Butimba Teacher's College. It describes, in full, what the platform must do, how it is structured, who uses it, and how each part behaves. It is intended to guide the design, development, testing, deployment and future maintenance of the system, and to serve as a shared reference for the College management, the development team and any auditors or partners.

### 1.2 About Butimba Teacher's College
Butimba Teacher's College is a public teacher-training institution operating under the Ministry of Education, Science and Technology (MoEST). The College trains primary-school teachers and, through this platform, offers a Diploma in Primary Education by distance learning for the 2026/2027 intake. Applicants are qualified teachers who completed Certificate-level teacher training (Pre-primary, Primary, or Special Education), whether currently employed or not yet employed.

### 1.3 Scope of the System
The eLMS covers the entire online learning lifecycle of the College, including:

- A public-facing website (Home, Courses, Admission, Media) that promotes the College and its distance-learning programmes.
- An online admission and application workflow, including submission of application forms and payment slips, and application status tracking.
- A secure learning environment where enrolled students access programmes, courses, modules, topics and learning materials.
- Delivery of learning content in multiple formats (PDF, slides, video), together with assignments, quizzes and live online classes.
- Communication tools: announcements, discussion forums and links to live sessions on Google Meet, Zoom and similar platforms.
- Assessment management, including an assignment submission portal with a timer, grading and publication of results.
- Financial tracking for each student: registration/admission fees, payments and outstanding debts.
- Role-based access and administration for three primary user types — **Administrator, Teacher and Student**.

### 1.4 Intended Audience
- College management and academic staff — to confirm the system meets institutional needs.
- Software developers and designers — to build and style the system correctly.
- System administrators and ICT staff — to deploy, configure and maintain the platform.
- Quality assurance / testers — to verify each requirement.

### 1.5 Definitions, Acronyms and Abbreviations

| Term | Meaning |
|---|---|
| **eLMS** | Electronic Learning Management System — the platform described in this document. |
| **MoEST** | Ministry of Education, Science and Technology (Wizara ya Elimu, Sayansi na Teknolojia). |
| **Programme** | A full course of study leading to an award, e.g. a Diploma stream (mchepuo). |
| **Course / Module** | A teachable unit within a programme (e.g. Assessment & Evaluation), owned by a tutor. |
| **Topic** | A subdivision of a module containing specific learning content. |
| **Admin** | Administrator — manages the whole system, users, courses, admissions and finance. |
| **Teacher / Tutor** | Academic staff who create courses, upload content and assess students. |
| **Student / Learner** | An admitted, registered learner enrolled in a programme and its courses. |
| **TP** | Teaching Practice (Mafunzo kwa Vitendo). |
| **Distance Learning** | Masomo kwa njia ya masafa — learning delivered mainly online/remotely. |

---

## 2. System Overview

### 2.1 Background
To widen access to teacher upgrading and to reach teachers who cannot attend in person, the College is delivering its Diploma in Primary Education through distance learning. This requires a reliable online platform where applicants can apply and pay, where admitted students can learn and be assessed remotely, and where staff can manage the whole process centrally.

### 2.2 Vision and Goals
- Provide a single, easy-to-use online home for all of the College's distance-learning activities.
- Make application, admission and payment fully digital and transparent.
- Give students continuous access to quality learning materials, assessments and their tutors.
- Give staff efficient tools to publish content, assess learners and monitor progress.
- Give management accurate, real-time information on admissions, enrolment, academics and finance.

### 2.3 System Objectives
- Automate the admission workflow from application to acceptance/rejection.
- Restrict learning access to students who have paid the required registration/admission fee.
- Organise academics in a clear hierarchy: Programme → Department → Course/Module → Topic → Content.
- Support multiple content types and interactive assessment with fair timing controls.
- Enforce clear, role-based permissions for Admin, Teacher and Student.
- Maintain a complete, auditable record of academic and financial activity.

### 2.4 High-Level Description
The platform is a web application with a public area and a secured member area. The public area markets the College and lets visitors apply. Once an applicant is accepted and has paid the registration/admission fee, they receive login credentials and become a Student. Students enrol in the courses of their programme, study the materials uploaded by their Teachers, complete assignments and quizzes, join live classes, participate in discussions and view their results and financial status. Teachers create and manage their courses and assess learners. The Administrator oversees the entire system — users, programmes, courses, admissions, payments and reports.

### 2.5 Recommended Technology Considerations (advisory)
The following are recommendations, not mandatory choices — the development team may substitute equivalent technologies:

- Responsive web front-end that works on low-cost smartphones and on desktops, and degrades gracefully on slow connections (important for distance learners).
- A secure server-side application with a relational database for structured academic and financial records.
- Reliable file storage for learning materials (PDF, slides, video), with the option of streaming large videos.
- Integration hooks for online payment / bank slip verification and for live-class links (Google Meet, Zoom).
- HTTPS everywhere, encrypted passwords, regular automated backups and role-based access control.

---

## 3. User Roles and Access Control

The system recognises three primary roles — **Administrator, Teacher and Student** — plus a public **Guest/Applicant** with no login. Every account is tied to exactly one role, and each role sees only the features it is permitted to use.

### 3.1 Administrator (Admin)
The Administrator has the highest level of access and is responsible for running the whole platform.

- Create, edit, suspend and delete all user accounts (Teachers and Students) and assign roles.
- Create and manage programmes, departments, courses/modules and their codes.
- Assign Teachers to the courses they will manage.
- Manage the entire admission workflow: review applications, verify payment slips, accept or reject applicants.
- Configure the fee structure and monitor payments, debts and financial reports.
- Manage all public content — Home, About, Media (photo gallery, video, news & events), announcements.
- Publish official results after moderation and control access to the learning area.
- View system-wide reports and dashboards, and manage system settings, backups and security.

### 3.2 Teacher (Tutor)
A Teacher owns and delivers the courses assigned to them by the Administrator.

- Create and organise course content: topics and modules within their assigned courses.
- Upload learning materials in PDF, slides, video and other supported formats.
- Create assignments and quizzes, set deadlines and timers, and manage the submission portal.
- Grade submissions, give feedback and record marks.
- Post announcements to their courses and moderate the course discussion forum.
- Schedule and share links to live online classes (Google Meet, Zoom, etc.).
- View the list of students enrolled in their courses and monitor their progress.

### 3.3 Student (Learner)
A Student is an admitted, registered learner who has paid the required fee and received login credentials.

- Log in to the secure learning area (only after payment of the registration/admission fee).
- View their programme and enrol in / access its courses and modules.
- Read, download or stream learning materials (PDF, slides, video).
- Attempt quizzes and submit assignments through the timed submission portal.
- Join live online classes via the shared links.
- Participate in the discussion forum and read announcements.
- View their results, payment history and any outstanding debts under "My Status".
- Update their own profile and change their password.

### 3.4 Guest / Applicant (Public)
Any visitor without a login. A Guest can browse the public website, read about the College and its courses, and submit an application. A Guest becomes a Student only after acceptance and payment.

### 3.5 Roles & Permissions Matrix
Legend: ✓ = full access · P = partial / own items only · — = no access.

| Function / Feature | Admin | Teacher | Student | Guest |
|---|:---:|:---:|:---:|:---:|
| Browse public website | ✓ | ✓ | ✓ | ✓ |
| Submit application | ✓ | — | — | ✓ |
| Review / accept applications | ✓ | — | — | — |
| Manage users & roles | ✓ | — | — | — |
| Create programmes & courses | ✓ | — | — | — |
| Upload course content | ✓ | P | — | — |
| Create assignments / quizzes | ✓ | P | — | — |
| Grade & feedback | ✓ | P | — | — |
| Access learning materials | ✓ | ✓ | ✓ | — |
| Submit assignments | — | — | ✓ | — |
| Join live classes | ✓ | ✓ | ✓ | — |
| View results | ✓ | P | P | — |
| Manage fees & payments | ✓ | — | P | — |
| Manage media & announcements | ✓ | P | — | — |
| System settings & backups | ✓ | — | — | — |

---

## 4. System Structure (Site Map and Main Modules)

The platform is organised into the following main sections. Sections 4.1–4.5 are mostly public; 4.6–4.8 are secured and require a login.

### 4.1 Home
The landing page and public face of the College. It contains:

- Message from the Principal (Ujumbe wa Mkuu wa Chuo).
- About the College (Kuhusu Chuo) — history, mission and profile.
- The College Motto ("Juhudi na Maarifa").
- Contact information: phone numbers and e-mail address.
- A clear notice that the College offers training by distance learning (Tunatoa mafunzo kwa njia ya masafa), alongside day (kutwa) and boarding (bweni) options for other programmes.
- Pictures of tutors and staff, and a dedicated section/folder for the Principal (Mkuu).
- Quick links to Apply Now and Login.

### 4.2 Courses
Presents the academic offering of the College:

- Programmes (the diploma streams / michepuo offered).
- Departments and the courses/modules that belong to them.
- For each course: its name, code and a short description, so applicants know exactly what is offered.
- Administrative tools (Admin only) to create courses and assign course numbers/codes.

### 4.3 Admission
Explains how to join the College:

- Admission process — step-by-step guidance.
- Eligibility criteria / entry requirements (e.g. a Certificate in Teacher Education — Pre-primary, Primary or Special Education).
- Fee structure — registration/admission and tuition fees.

### 4.4 LMS (Learning Management)
The core learning environment, available to enrolled students. Its features are:

- A list of courses (e.g. "Assessment & Evaluation") in which a student can enrol.
- Within each course, a list of topics and modules created by a tutor.
- Learning materials in PDF, slides and similar formats, plus video lessons.
- Assignments and quizzes for each course.
- Links to live online classes (Google Meet, Zoom, etc.).
- A discussion forum for each course.
- An assignment submission portal with a timer / deadline control.
- Course announcements.

### 4.5 Media
Public media and news about the College:

- Photo gallery.
- Video gallery.
- News & events.
- Announcements.

### 4.6 Login
- Student login — becomes available only after payment of the registration/admission fee.
- Staff login — for Administrators and Teachers.
- Password reset and account recovery.

### 4.7 Apply Now
- Online application form.
- Upload / submit the payment slip (pay slip).
- Application status: Accepted or Rejected.
- An internal sheet (Admin view) showing the applications received for each course.

### 4.8 My Status / My Account
- Results — the student's marks and grades.
- Payments — a history of amounts paid.
- Debts — any outstanding balance.
- Profile management and password change.

---

## 5. Academic Structure (Programmes, Courses, Modules, Topics)

Academics are organised in a clear hierarchy. A Programme is a full award (a diploma stream). Each programme belongs to one or more Departments and is made up of Courses/Modules, each with its own code. A course is divided into Topics, and each topic holds the actual learning Content (PDF, slides, video, assignments and quizzes).

> **Hierarchy:** Programme → Department → Course / Module (with code) → Topic → Content

### 5.1 Programmes Offered (Distance Learning, 2026/2027)
These are the diploma streams advertised for the 2026/2027 distance-learning intake:

| Code | Programme (Stashahada ya Elimu Msingi) | Medium of Instruction |
|---|---|---|
| DPE-SS | Social Science stream (Mchepuo wa Sayansi ya Jamii) | Kiswahili |
| DPE-SK | Social Science & Kiswahili stream (Sayansi ya Jamii na Lugha ya Kiswahili) | Kiswahili |
| DPE-SM | Science & Mathematics stream (Sayansi na Hisabati) | Kiswahili & English |
| DPE-AS | Arts & Sports stream (Sanaa na Michezo) | Kiswahili & English |

> *Note: Programme codes above are proposed for the system. The College should confirm final codes against the official curriculum issued by the Tanzania Institute of Education (TIE) and NACTE.*

### 5.2 Departments
A recommended departmental grouping used to organise courses and staff:

- Department of Educational Foundations & Professional Studies (EDU).
- Department of Languages — Kiswahili (KIS) and English (ENG).
- Department of Mathematics (MTC) and Science (SCI).
- Department of Social Studies (SST).
- Department of Arts (ART) and Physical Education & Sports (SPO).
- Department of ICT / Educational Technology (ICT), and Research & Teaching Practice (RES/TP).

### 5.3 Course Coding System
Each course/module is identified by a unique code made of a department prefix and a number: **[DEPT] + [level digit] + [sequence]**. For example, `EDU 114` is course 14 in the Educational Foundations department at level 1. The number keeps courses ordered and easy to reference across the system.

| Prefix | Department / Area | Example |
|---|---|---|
| EDU | Educational Foundations & Professional Studies | EDU 114 – Assessment & Evaluation |
| KIS | Kiswahili | KIS 121 – Stadi za Lugha ya Kiswahili |
| ENG | English | ENG 122 – Communication Skills in English |
| SST | Social Studies (Sayansi ya Jamii) | SST 131 – Social Studies Content & Methods |
| MTC | Mathematics (Hisabati) | MTC 141 – Primary Mathematics & Pedagogy |
| SCI | Science (Sayansi) | SCI 151 – Basic Science & Pedagogy |
| ART | Arts (Sanaa) | ART 161 – Arts & Crafts |
| SPO | Sports / PE (Michezo) | SPO 171 – Physical Education & Sports |
| ICT | ICT in Education (TEHAMA) | ICT 115 – ICT in Education |
| RES/TP | Research & Teaching Practice | TP 202 – Teaching Practice (Mafunzo kwa Vitendo) |

### 5.4 Sample Course Catalogue
The table below is an illustrative catalogue showing how a course entry looks in the system — code, name, department, medium and the programme(s) it serves. The official course list must be entered by the College from the approved TIE/NACTE curriculum.

| Code | Course / Module Name | Department | Type | Medium |
|---|---|---|---|---|
| EDU 111 | Foundations of Education (Misingi ya Elimu) | EDU | Core | Ksw |
| EDU 112 | Educational Psychology (Saikolojia ya Elimu) | EDU | Core | Ksw |
| EDU 113 | Curriculum & Teaching Methods (Mtaala na Mbinu) | EDU | Core | Ksw |
| EDU 114 | Assessment & Evaluation (Upimaji na Tathmini) | EDU | Core | Ksw |
| ICT 115 | ICT in Education (TEHAMA katika Elimu) | ICT | Core | Ksw/Eng |
| KIS 121 | Stadi za Lugha ya Kiswahili | KIS | Subject | Ksw |
| SST 131 | Social Studies Content & Methods | SST | Subject | Ksw |
| MTC 141 | Primary Mathematics & Pedagogy | MTC | Subject | Ksw/Eng |
| SCI 151 | Basic Science & Pedagogy | SCI | Subject | Ksw/Eng |
| ART 161 | Arts & Crafts (Sanaa na Ufundi) | ART | Subject | Ksw/Eng |
| SPO 171 | Physical Education & Sports (Michezo) | SPO | Subject | Ksw/Eng |
| RES 201 | Educational Research (Utafiti wa Kielimu) | RES | Core | Ksw |
| TP 202 | Teaching Practice (Mafunzo kwa Vitendo) | TP | Practical | Ksw/Eng |

### 5.5 Module and Topic Structure
When a Teacher opens one of their courses, they build it out of topics and modules. A worked example for the course `EDU 114 – Assessment & Evaluation`:

- **EDU 114 – Assessment & Evaluation**
  - Topic 1: Concepts of Assessment — lecture notes (PDF), slides, a short intro video, and a quiz.
  - Topic 2: Types of Assessment (formative vs summative) — slides, reading (PDF), discussion prompt.
  - Topic 3: Constructing Test Items — video, worked examples (PDF), assignment with a submission deadline and timer.
  - Topic 4: Grading & Reporting — slides, a live online class (Google Meet), and a final quiz.

Each topic can therefore mix several content types, and the Teacher controls the order in which topics are released to students.

### 5.6 Learning Content Types

| Content Type | Description |
|---|---|
| Documents | PDF notes, handouts and readings that students can view or download. |
| Slides | Presentation slides for each topic. |
| Video | Recorded video lessons, viewable or streamable within the platform. |
| Quizzes | Auto-marked question sets (multiple choice, true/false, short answer). |
| Assignments | Tasks submitted through the timed submission portal and graded by the Teacher. |
| Live classes | Scheduled sessions with links to Google Meet, Zoom or similar. |
| Discussion | Threaded forum posts for questions and peer interaction. |
| Announcements | Notices posted by the Teacher or Admin for a course or the whole College. |

---

## 6. Functional Requirements by Role

### 6.1 Administrator Functions
- **FR-A1:** Log in securely to an admin dashboard showing key statistics (applications, enrolments, payments, active courses).
- **FR-A2:** Create, edit, deactivate and delete Teacher and Student accounts, and reset passwords.
- **FR-A3:** Create and manage programmes, departments and courses, including assigning course codes.
- **FR-A4:** Assign one or more Teachers to each course.
- **FR-A5:** View and process applications; verify uploaded payment slips; mark applicants Accepted or Rejected.
- **FR-A6:** Generate login credentials automatically once an applicant is accepted and has paid.
- **FR-A7:** Configure and update the fee structure; record and reconcile payments; view debts.
- **FR-A8:** Manage all public content — Home, About, Media, News & Events, Announcements.
- **FR-A9:** Moderate and publish official results.
- **FR-A10:** Generate reports (admissions, enrolment, finance, academic performance) and export them.
- **FR-A11:** Manage system settings, roles, backups and security logs.

### 6.2 Teacher Functions
- **FR-T1:** Log in to a teacher dashboard listing the courses assigned to them.
- **FR-T2:** Create topics and modules inside their courses and set their release order.
- **FR-T3:** Upload learning materials (PDF, slides, video) to each topic.
- **FR-T4:** Create quizzes and assignments, set deadlines and a countdown timer.
- **FR-T5:** Receive and grade submissions, give written feedback and record marks.
- **FR-T6:** Post course announcements and moderate the course discussion forum.
- **FR-T7:** Schedule live classes and share the meeting links with enrolled students.
- **FR-T8:** View the roster of enrolled students and track their participation and progress.

### 6.3 Student Functions
- **FR-S1:** Log in only after the registration/admission fee has been paid and the account activated.
- **FR-S2:** View their programme and enrol in / open its courses and modules.
- **FR-S3:** Read, download or stream learning materials for each topic.
- **FR-S4:** Attempt quizzes and view auto-marked scores.
- **FR-S5:** Submit assignments before the deadline through the timed portal.
- **FR-S6:** Join scheduled live classes via the shared links.
- **FR-S7:** Post to and read the discussion forum, and read announcements.
- **FR-S8:** View results, payment history and outstanding debts under "My Status".
- **FR-S9:** Update their profile and change their password.

---

## 7. Admission and Application Workflow

### 7.1 Application Steps
1. **Step 1:** The applicant opens "Apply Now" and completes the online application form (personal details, qualifications, chosen programme/stream).
2. **Step 2:** The applicant pays the required application/registration fee and uploads the payment slip.
3. **Step 3:** The Administrator reviews the application and verifies the payment slip.
4. **Step 4:** The Administrator marks the application Accepted or Rejected; the applicant is notified.
5. **Step 5:** For accepted applicants who have paid, the system generates login credentials, turning the applicant into a Student with access to the learning area.

### 7.2 Application Status Management
Every application carries a status that the applicant can track: **Submitted → Under Review → Accepted / Rejected → Registered**. The system records the date of each change and keeps a full history.

### 7.3 Applications-per-Course Sheet
The Administrator has an internal sheet/report that lists, for each course or programme, the number of applications received, how many were accepted, rejected and still pending. This helps the College plan intake and staffing per stream.

---

## 8. Registration, Payments and Fees

### 8.1 Registration / Admission Fee
Access to the learning area is gated: a Student can log in and study only after the registration/admission fee is confirmed as paid. Before that, the account remains inactive.

### 8.2 Fee Structure
The Administrator configures the fee structure, which is displayed under Admission. It typically includes an application/registration fee and tuition fees, and may be split into instalments. Exact amounts are set by the College and are not fixed in this document.

### 8.3 Payments, Debts and Statements
- Each payment is recorded against the student's account with date, amount and reference.
- The system calculates any outstanding balance (debt) automatically.
- Students see their payments and debts under "My Status"; the Admin sees them across all students and in finance reports.

---

## 9. Assessment and Evaluation

### 9.1 Assignments & Submission Portal (with Timer)
- Teachers create assignments with instructions, attached files and a deadline.
- Students submit their work through the portal; a visible countdown timer shows the time remaining.
- Submissions after the deadline are either blocked or flagged as late, according to the setting the Teacher chooses.
- Each submission is time-stamped and stored securely for grading.

### 9.2 Quizzes and Tests
- Quizzes support multiple choice, true/false and short-answer questions.
- Objective questions are auto-marked; scores are shown to the student immediately or after closing, as configured.
- Time limits and the number of allowed attempts can be set per quiz.

### 9.3 Grading and Results
- Teachers record marks and feedback for assignments and subjective questions.
- The system compiles marks per course and per student.
- The Administrator moderates and then publishes official results, which appear under the student's "My Status → Results".

---

## 10. Communication and Collaboration

### 10.1 Announcements
Admins post College-wide announcements; Teachers post course-level announcements. Announcements appear on the dashboard and in the Media section, and can trigger notifications.

### 10.2 Discussion Forum
Each course has a threaded discussion forum where students ask questions and interact, and the Teacher moderates and answers. This supports learning for students studying remotely.

### 10.3 Online Live Classes
Teachers schedule live sessions and share links to Google Meet, Zoom or similar tools. Enrolled students see the schedule and join from within the course, so live teaching complements the recorded and written materials.

---

## 11. Media and Content Management

The Media section, managed by the Administrator, keeps the public informed and showcases the College:

- Photo gallery — organised albums of College life, staff and events.
- Video gallery — promotional and event videos.
- News & events — dated posts about College activities.
- Announcements — public notices, including admission deadlines.

---

## 12. Non-Functional Requirements

| Attribute | Requirement |
|---|---|
| Security | HTTPS on all pages; encrypted (hashed) passwords; role-based access; protection against common web attacks; audit logs for sensitive actions. |
| Access control | Learning area accessible only to registered, fee-paid students; strict separation between Admin, Teacher and Student areas. |
| Performance | Pages and lists should load quickly even on modest connections; large videos should stream progressively. |
| Availability | Target high uptime, especially around deadlines and live classes; scheduled maintenance announced in advance. |
| Usability | Simple, mobile-first, bilingual-friendly (Kiswahili/English) interface usable by teachers with basic ICT skills. |
| Compatibility | Works on common smartphones and desktop browsers; graceful degradation on older devices. |
| Scalability | Able to grow with more programmes, courses, students and content over successive intakes. |
| Backup & recovery | Regular automated backups of database and files, with a tested recovery procedure. |
| Data protection | Personal, academic and financial data handled confidentially and in line with applicable regulations. |
| Reliability | Accurate timers, submission time-stamps and fee calculations; no loss of submitted work. |

---

## 13. Data Model Overview (Key Entities)

The main data entities and how they relate:

| Entity | Key Information | Relationships |
|---|---|---|
| User | Name, contact, role (Admin/Teacher/Student), login, status | Has one role; a Student has one application & one finance record. |
| Application | Applicant details, chosen programme, payment slip, status | Belongs to a Guest/Applicant; reviewed by Admin; becomes a Student on acceptance. |
| Programme | Code, name, stream, medium | Has many Courses; enrols many Students. |
| Department | Code, name | Groups many Courses and Teachers. |
| Course / Module | Code, name, description, medium | Belongs to a Programme/Department; owned by a Teacher; has many Topics; enrols many Students. |
| Topic | Title, order, release status | Belongs to a Course; contains many Content items. |
| Content | Type (PDF/slides/video), file, link | Belongs to a Topic. |
| Assignment / Quiz | Instructions, deadline, timer, marks | Belongs to a Course; has many Submissions. |
| Submission | Student, file, timestamp, grade, feedback | Links a Student to an Assignment/Quiz. |
| Result | Course, student, marks, grade, status | Links Student and Course. |
| Payment | Amount, date, reference, type | Belongs to a Student; reduces any Debt. |
| Announcement / Post | Title, body, date, scope | Created by Admin or Teacher. |

---

## 14. Reports and Analytics

- Admissions report: applications received, accepted, rejected and pending, per programme/course.
- Enrolment report: number of active students per programme and course.
- Financial report: fees due, paid and outstanding, per student and in total.
- Academic report: marks and pass rates per course and per student.
- Activity report: content uploaded, submissions, forum activity and live-class attendance.

---

## 15. Assumptions, Constraints and Future Enhancements

### 15.1 Assumptions & Constraints
- Students have at least occasional internet access via a phone or computer.
- Official programme, course and fee data are provided by the College from approved sources (TIE/NACTE, MoEST).
- Payment verification may initially be manual (uploaded slips) before any automated integration.

### 15.2 Possible Future Enhancements
- Automated online payment and instant verification.
- Mobile app and offline access to downloaded materials.
- SMS/e-mail notifications for deadlines, results and announcements.
- Certificate generation and e-transcripts.
- Analytics dashboards for early identification of struggling students.

---

## Appendix A — Complete Page / Screen List

| Section | Pages / Screens |
|---|---|
| Home | Landing, Message from Principal, About the College, Contacts, Staff pictures, Principal folder. |
| Courses | Programmes list, Departments, Course details, (Admin) Create course. |
| Admission | Admission process, Eligibility/Requirements, Fee structure. |
| Apply Now | Application form, Upload pay slip, Application status, (Admin) Applications-per-course sheet. |
| Login | Student login, Staff login, Password reset. |
| LMS | Course list, Enrol, Course home, Topics/Modules, Content viewer, Quiz, Assignment submission (timer), Forum, Live-class links, Announcements. |
| Media | Photo gallery, Video gallery, News & events, Announcements. |
| My Status | Results, Payments, Debts, Profile & password. |
| Admin | Dashboard, Users, Programmes/Courses, Assign teachers, Admissions, Finance, Results, Media, Reports, Settings, Backups. |
| Teacher | Dashboard, My courses, Topics/Content, Quizzes/Assignments, Grading, Forum, Announcements, Live classes, Rosters. |

---

## Appendix B — Sample Course Codes Reference

> *The codes below are illustrative and provided to show the coding pattern only. The College must replace them with the official codes and course list from the approved TIE/NACTE curriculum before the system goes live.*

| Code | Course / Module | Serves Programme(s) |
|---|---|---|
| EDU 111 | Foundations of Education | All streams |
| EDU 112 | Educational Psychology | All streams |
| EDU 113 | Curriculum & Teaching Methods | All streams |
| EDU 114 | Assessment & Evaluation | All streams |
| ICT 115 | ICT in Education | All streams |
| KIS 121 | Stadi za Lugha ya Kiswahili | DPE-SK |
| SST 131 | Social Studies Content & Methods | DPE-SS, DPE-SK |
| MTC 141 | Primary Mathematics & Pedagogy | DPE-SM |
| SCI 151 | Basic Science & Pedagogy | DPE-SM |
| ART 161 | Arts & Crafts | DPE-AS |
| SPO 171 | Physical Education & Sports | DPE-AS |
| RES 201 | Educational Research | All streams |
| TP 202 | Teaching Practice | All streams |

---

## 16. Technical Implementation (Full-Stack Development Guide)

This section documents the actual technology stack, architecture, codebase structure, and development roadmap for building the eLMS as a production web application.

### 16.1 Technology Stack

| Layer | Technology | Version | Purpose |
|---|---|---|---|
| **Backend Framework** | Laravel (PHP) | ^13.8 | MVC application framework, routing, Eloquent ORM, auth, middleware |
| **PHP Runtime** | PHP | ^8.3 | Server-side language with typed properties, readonly classes, enum support |
| **Database** | SQLite / MySQL | — | Relational database for structured academic and financial records |
| **Frontend Styling** | Tailwind CSS | ^4.0 | Utility-first CSS framework via CDN + Vite plugin |
| **Frontend Assets** | Vite | ^8.0 | Asset bundler and dev server for JS/SCSS compilation |
| **UI Components** | Bootstrap | ^5.2.3 | Used in auth scaffolding (laravel/ui) and dashboard layout |
| **Icons** | Remixicon / Heroicons | ^4.9 / ^2.2 | SVG icon sets for navigation, buttons, and UI elements |
| **Animations** | Animate.css / AOS | ^4.1 / ^2.3 | Scroll-triggered and CSS keyframe animations |
| **PDF Generation** | barryvdh/laravel-dompdf | ^3.1 | Server-side PDF generation for application forms and reports |
| **Auth Scaffolding** | laravel/ui | ^4.6 | Login, register, password reset views and controllers |
| **Font** | Nunito (Bunny Fonts) | — | Primary typeface, loaded via CDN |
| **Deployment** | Apache + .htaccess | — | Root-level serving without `/public` path |

### 16.2 Application Architecture

The application follows Laravel's MVC pattern with a public-facing area and a secured member area.

```
Butimba eLMS
├── Public Area (no auth)
│   ├── Home (welcome.blade.php)
│   ├── About (pages/about.blade.php)
│   ├── Courses (pages/courses.blade.php)
│   ├── Admissions (pages/admissions.blade.php)
│   ├── Apply Now (pages/apply.blade.php)
│   ├── Track Application (pages/track.blade.php)
│   ├── Blogs & Events (pages/news.blade.php)
│   ├── Contact (pages/contact.blade.php)
│   └── E-Library (pages/elibrary.blade.php)
│
├── Auth Area
│   ├── Login (auth/login.blade.php)
│   ├── Register (auth/register.blade.php)
│   ├── Password Reset (auth/passwords/)
│   └── Email Verify (auth/verify.blade.php)
│
└── Secured Area (auth required)
    └── Dashboard (home.blade.php)
        └── [TODO: Admin / Teacher / Student dashboards]
```

### 16.3 Codebase Structure

```
f:\butimba\
├── app\
│   ├── Http\Controllers\
│   │   ├── ApplicationController.php    # Application form, preview, submit, track, PDF download
│   │   ├── CourseController.php         # Course listing and detail API
│   │   ├── HomeController.php           # Auth-gated dashboard
│   │   ├── LocationController.php       # Tanzania regions/districts/wards API (tzgeodata)
│   │   ├── NewsController.php           # Blog posts and events listing + post detail API
│   │   ├── VisitorController.php        # Visitor statistics API
│   │   └── Auth\
│   │       ├── LoginController.php      # Login + AJAX login
│   │       ├── RegisterController.php   # Registration + AJAX register
│   │       ├── ForgotPasswordController.php
│   │       ├── ResetPasswordController.php
│   │       └── VerificationController.php
│   │
│   ├── Models\
│   │   ├── Application.php              # Application with auto-generated tracking code (BTC-XXXXXXXX)
│   │   ├── Course.php                   # Bilingual course catalog
│   │   ├── Event.php                    # Calendar events with date casting
│   │   ├── Post.php                     # Blog/news posts
│   │   ├── User.php                     # Auth user with role field (admin/teacher/user)
│   │   └── Visitor.php                  # Page visit tracking
│   │
│   ├── Notifications\
│   │   └── ApplicationSubmitted.php     # Email notification on application submission
│   │
│   └── Providers\
│       └── AppServiceProvider.php       # Binds public path to base path (root-level serving)
│
├── database\
│   ├── migrations\
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 2026_07_28_180000_create_visitors_table.php
│   │   ├── 2026_07_28_181909_create_courses_table.php
│   │   ├── 2026_07_28_182000_create_applications_table.php
│   │   ├── 2026_07_28_182236_create_posts_table.php
│   │   ├── 2026_07_28_182243_create_events_table.php
│   │   └── 2026_07_28_210000_add_tracking_code_to_applications_table.php
│   │
│   └── seeders\
│       ├── CourseSeeder.php             # Seeds diploma/degree/certificate courses
│       ├── PostSeeder.php               # Seeds bilingual blog posts
│       ├── EventSeeder.php              # Seeds upcoming events
│       └── DatabaseSeeder.php           # Orchestrates all seeders
│
├── resources\
│   ├── views\
│   │   ├── welcome.blade.php            # Home page with hero, stats, CTA buttons
│   │   ├── home.blade.php               # Post-login dashboard (placeholder)
│   │   ├── layouts\
│   │   │   ├── site.blade.php           # Public layout: header, footer, Tailwind config, lang toggle
│   │   │   ├── app.blade.php            # Auth layout: Bootstrap-based, Vite assets
│   │   │   └── auth.blade.php           # Auth page layout with split-screen design
│   │   ├── pages\
│   │   │   ├── about.blade.php
│   │   │   ├── admissions.blade.php
│   │   │   ├── apply.blade.php          # Multi-step application form with location API
│   │   │   ├── contact.blade.php
│   │   │   ├── courses.blade.php        # Course catalog with detail modal
│   │   │   ├── elibrary.blade.php
│   │   │   ├── news.blade.php           # Blogs & events with modal and calendar
│   │   │   └── track.blade.php          # Application tracking by code
│   │   ├── partials\
│   │   │   ├── header.blade.php         # Dual logos, nav, mobile side drawer, lang toggle
│   │   │   └── footer.blade.php         # Contact info, links, bilingual
│   │   ├── auth\
│   │   │   ├── login.blade.php          # AJAX login with modal
│   │   │   ├── register.blade.php       # AJAX register with phone validation
│   │   │   └── passwords\
│   │   └── pdf\
│   │       └── application.blade.php    # PDF template for application form
│   │
│   ├── sass\app.scss                    # Bootstrap SCSS for auth area
│   └── js\app.js                        # Bootstrap JS for auth area
│
├── routes\
│   └── web.php                          # All routes (public, auth, API endpoints)
│
├── config\                              # Laravel configuration (app, auth, database, mail, etc.)
├── public\                              # Original public directory (assets, htaccess)
├── index.php                            # Root-level entry point (serves app without /public)
├── .htaccess                            # Root-level rewrite rules + security blocks
├── composer.json                        # PHP dependencies
├── package.json                         # Node dependencies
├── vite.config.js                       # Vite asset bundler config
└── .env                                 # Environment configuration
```

### 16.4 Database Schema (Current)

#### users
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | Auto-increment |
| name | string | Full name |
| email | string | Unique, used for login |
| phone | string | Unique, Tanzanian format (255XXXXXXXXX) |
| role | string | `admin`, `teacher`, `user` (student) |
| password | string | Hashed |
| email_verified_at | datetime | Nullable |
| remember_token | string | Laravel auth |

#### courses
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | |
| name_en | string | English name |
| name_sw | string | Swahili name |
| category | string | `Degree`, `Diploma`, `Certificate` |
| description_en | text | English description |
| description_sw | text | Swahili description |
| duration_en | string | English duration |
| duration_sw | string | Swahili duration |
| requirements_en | text | Nullable, English requirements |
| requirements_sw | text | Nullable, Swahili requirements |

#### applications
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | |
| tracking_code | string | Auto-generated `BTC-XXXXXXXX`, unique |
| email | string | Applicant email |
| full_name | string | |
| gender | enum | `Mke`, `Mme` |
| dob | date | Date of birth |
| region | string | From TZ geodata API |
| district | string | From TZ geodata API |
| ward | string | From TZ geodata API |
| address | text | Physical address |
| phone | string | Applicant phone |
| relative_phone | string | Next of kin phone |
| employment_status | enum | `Nimeajiriwa`, `Sijaajiriwa` |
| previous_profession | string | |
| college_name | string | Previous college |
| graduation_year | integer | |
| certificate_number | string | |
| applied_course | string | |
| declaration_confirmed | boolean | Default false |
| status | string | Default `Pending` |

#### posts
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | |
| title_en | string | English title |
| title_sw | string | Swahili title |
| body_en | text | English content |
| body_sw | text | Swahili content |
| category | string | Blog category |
| image | string | Nullable, image path |

#### events
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | |
| title_en | string | English title |
| title_sw | string | Swahili title |
| date | date | Event date (cast) |
| time | string | Nullable, event time |
| location_en | string | English location |
| location_sw | string | Swahili location |
| description_en | text | English description |
| description_sw | text | Swahili description |

#### visitors
| Column | Type | Notes |
|---|---|---|
| id | bigint (PK) | |
| visit_date | date | Date of visit |
| page_visited | string | URL/path visited |

### 16.5 Routes (Current)

| Method | URI | Controller@Method | Auth | Purpose |
|---|---|---|---|---|
| GET | `/` | Closure | — | Home page |
| GET | `/about` | Closure | — | About page |
| GET | `/courses` | CourseController@index | — | Course catalog |
| GET | `/api/courses/{id}` | CourseController@show | — | Course detail JSON |
| GET | `/admissions` | Closure | — | Admissions info |
| GET | `/news` | NewsController@index | — | Blogs & events |
| GET | `/api/posts/{id}` | NewsController@showPost | — | Post detail JSON |
| GET | `/contact` | Closure | — | Contact page |
| GET | `/e-library` | Closure | — | E-Library page |
| GET | `/apply` | ApplicationController@showForm | — | Application form |
| POST | `/apply/preview` | ApplicationController@preview | — | PDF preview |
| POST | `/apply` | ApplicationController@submit | — | Submit application |
| GET | `/apply/download/{id}` | ApplicationController@download | — | Download PDF |
| GET | `/track` | ApplicationController@trackForm | — | Track form |
| GET | `/track/{code}` | ApplicationController@trackResult | — | Track result JSON |
| GET | `/api/visitor-stats` | VisitorController@stats | — | Visitor stats JSON |
| GET | `/api/regions` | LocationController@regions | — | TZ regions JSON |
| GET | `/api/districts/{region}` | LocationController@districts | — | TZ districts JSON |
| GET | `/api/wards/{district}` | LocationController@wards | — | TZ wards JSON |
| GET | `/login` | LoginController@showLoginForm | guest | Login page |
| POST | `/login` | LoginController@login | guest | Authenticate |
| POST | `/ajax/login` | LoginController@ajaxLogin | guest | AJAX login |
| GET | `/register` | RegisterController@showRegistrationForm | guest | Register page |
| POST | `/register` | RegisterController@register | guest | Create account |
| POST | `/ajax/register` | RegisterController@ajaxRegister | guest | AJAX register |
| GET | `/home` | HomeController@index | auth | Dashboard |

### 16.6 Key Features Implemented

#### Public Website
- **Home page** with hero section, animated stats, CTA buttons (Admissions / Courses), principal's message
- **Bilingual support** (English / Kiswahili) via `data-lang` attributes and JavaScript toggle with localStorage persistence
- **Dual college logos** on header left and right sides with slide-in animations
- **Mobile side drawer** navigation with backdrop, smooth slide animation, and auth buttons
- **Course catalog** with category tabs (Degree / Diploma / Certificate) and detail modal
- **Online application form** with multi-step wizard, Tanzania location API integration (region → district → ward cascading dropdowns), PDF preview and download, auto-generated tracking code
- **Application tracking** by tracking code with status display
- **Blogs & Events** page with database-driven posts, modal detail view, and upcoming events sidebar
- **Contact page** with college contact details and contact form
- **About page** with college history, mission, and vision
- **Visitor analytics** with daily/weekly/monthly/yearly stats API

#### Authentication
- **AJAX login** and **AJAX register** with inline validation and no page reload
- **Phone validation** for Tanzanian numbers (format: 255XXXXXXXXX)
- **Password reset** flow via email
- **Role-based user model** (`admin`, `teacher`, `user`)

#### Infrastructure
- **Root-level serving** — `index.php` and `.htaccess` at project root, eliminating `/public` from URLs
- **Security rules** in `.htaccess` blocking access to `.env`, `vendor/`, `database/`, `storage/`, and other sensitive paths
- **AppServiceProvider** binds `public_path()` to base path for correct asset resolution
- **Tailwind CSS** configured via CDN with custom emerald and gold color palette matching college branding
- **Custom animations** — fadeInUp, slideInLeft/Right, float, pulseGlow with staggered delays

### 16.7 Frontend Design System

#### Color Palette
| Color | Shades | Usage |
|---|---|---|
| **Emerald** | 50–900 | Primary brand color, navigation, backgrounds, text |
| **Gold** | 50–900 | Accent color, CTAs, highlights, active states |
| **White** | — | Card backgrounds, text on dark |
| **Gray** | 50–800 | Body text, borders, muted elements |

#### Typography
- **Font Family:** Nunito (400–900 weights)
- **Headings:** `font-extrabold`, `tracking-tight`, `leading-tight`
- **Body:** `font-['Nunito',sans-serif]`, `antialiased`

#### Component Patterns
- **Cards:** `bg-white rounded-xl shadow-lg p-6`
- **Buttons:** Gradient backgrounds with hover states, shine effect on hover
- **Nav links:** Underline animation via `::after` pseudo-element
- **Language toggle:** Pill-style buttons with active state in gold
- **Modals:** Fixed overlay with backdrop blur and centered content
- **Side drawer:** Right-sliding panel with backdrop, ESC key support, body scroll lock

### 16.8 External Integrations

| Service | Purpose | Endpoint |
|---|---|---|
| **TZ GeoData API** | Tanzania administrative regions, districts, wards | `https://tzgeodata.vercel.app/api/v1` |
| **Bunny Fonts** | Privacy-friendly Google Fonts alternative | `https://fonts.bunny.net` |
| **Tailwind CDN** | Utility CSS framework (dev only) | `https://cdn.tailwindcss.com` |

### 16.9 Development Roadmap

The following modules are planned for full implementation per the system specification (Sections 4–14):

#### Phase 1: Admin Dashboard (Priority: High)
- [ ] Admin dashboard with statistics (applications, enrolments, payments, active courses)
- [ ] User management — CRUD for teachers and students, role assignment, password reset
- [ ] Programme and department management
- [ ] Course management — create courses, assign codes, assign teachers
- [ ] Application review — list applications, verify payment slips, accept/reject, generate credentials
- [ ] Fee structure configuration and payment recording
- [ ] Public content management — home, about, media, news, announcements

#### Phase 2: Teacher Dashboard (Priority: High)
- [ ] Teacher dashboard with assigned courses
- [ ] Course builder — topics, modules, content ordering
- [ ] Content upload — PDF, slides, video
- [ ] Assignment and quiz creation with deadlines and timers
- [ ] Submission grading with feedback and marks
- [ ] Course announcements and discussion forum moderation
- [ ] Live class scheduling with meeting links
- [ ] Student roster and progress tracking

#### Phase 3: Student LMS (Priority: High)
- [ ] Student dashboard with enrolled programme and courses
- [ ] Course view — topics, modules, content viewer
- [ ] Material access — PDF viewer, video player, slide viewer
- [ ] Quiz engine — attempt, auto-mark, score display
- [ ] Assignment submission portal with countdown timer
- [ ] Discussion forum — post, reply, read
- [ ] Live class links and schedule
- [ ] My Status — results, payments, debts
- [ ] Profile management and password change

#### Phase 4: Financial Module (Priority: Medium)
- [ ] Fee structure management (admin)
- [ ] Payment recording and reconciliation
- [ ] Student fee statements and debt calculation
- [ ] Financial reports (fees due, paid, outstanding)

#### Phase 5: Communication & Media (Priority: Medium)
- [ ] College-wide announcements (admin)
- [ ] Course-level announcements (teacher)
- [ ] Discussion forum with threading
- [ ] Photo gallery management
- [ ] Video gallery management
- [ ] News & events management

#### Phase 6: Reports & Analytics (Priority: Low)
- [ ] Admissions report (per programme/course)
- [ ] Enrolment report (active students per programme)
- [ ] Academic report (marks, pass rates per course/student)
- [ ] Activity report (content uploaded, submissions, forum activity)
- [ ] Export reports (PDF, CSV)

#### Phase 7: Production Hardening (Priority: Medium)
- [ ] Replace Tailwind CDN with compiled Vite build for production
- [ ] Implement proper middleware for role-based access control (`admin`, `teacher`, `user`)
- [ ] Add database indexes for performance on large datasets
- [ ] Set up automated backups (database + files)
- [ ] Configure queue workers for email notifications
- [ ] Implement rate limiting on form submissions
- [ ] HTTPS enforcement and security headers
- [ ] Switch from SQLite to MySQL for production

### 16.10 Development Commands

```bash
# Install dependencies
composer install
npm install

# Run development environment
composer dev    # Starts: php artisan serve, queue, pail logs, vite dev

# Database
php artisan migrate --force
php artisan db:seed --force
php artisan migrate:fresh --seed    # Reset and reseed

# Build assets for production
npm run build

# Run tests
php artisan test

# Clear caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 16.11 Deployment Configuration

The application is configured to run from the project root without exposing the `/public` path:

- **`index.php` (root):** Bootstrap file that loads `vendor/autoload.php` and `bootstrap/app.php` with paths adjusted to root directory
- **`.htaccess` (root):** Rewrite rules routing all requests to `index.php`, plus security rules blocking access to:
  - `.env` and environment files
  - `vendor/`, `node_modules/`, `database/`, `storage/`, `bootstrap/`, `config/`, `app/`, `resources/` directories
  - `.git`, `.gitignore`, `composer.json`, `composer.lock`, `package.json`, `artisan`, `README.md`
- **`AppServiceProvider`:** Binds `public_path()` to `base_path()` so `asset()` helper generates correct URLs

### 16.12 Security Considerations

| Area | Implementation | Status |
|---|---|---|
| **CSRF Protection** | Laravel `@csrf` in all forms, `_token` in AJAX | ✅ Active |
| **Password Hashing** | Laravel default (bcrypt via `Hash::make()`) | ✅ Active |
| **SQL Injection** | Eloquent ORM with parameterized queries | ✅ Active |
| **XSS Prevention** | Blade `{{ }}` escaping by default | ✅ Active |
| **File Access** | `.htaccess` blocks sensitive files/directories | ✅ Active |
| **Input Validation** | Form Request validation on application, registration | ✅ Active |
| **Auth Middleware** | `auth` middleware on `/home` route | ✅ Active |
| **Role Middleware** | Custom middleware for admin/teacher/user roles | ⬜ TODO |
| **Rate Limiting** | Throttle middleware on form endpoints | ⬜ TODO |
| **HTTPS Enforcement** | Force HTTPS in production | ⬜ TODO |
| **Security Headers** | CSP, X-Frame-Options, X-Content-Type-Options | ⬜ TODO |

---

*— End of Document —*
*Butimba Teacher's College · eLMS Documentation v1.0*
