# PhishGuard – Phishing Awareness and Detection Website

[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-orange.svg)](https://www.mysql.com/)
[![Frontend](https://img.shields.io/badge/Frontend-Bootstrap%205%20%7C%20HTML5%20%7C%20JS-success.svg)](https://getbootstrap.com/)
[![Server](https://img.shields.io/badge/Server-Apache%20(XAMPP)-red.svg)](https://www.apachefriends.org/)
[![License](https://img.shields.io/badge/Academic-B.Tech%20Project-purple.svg)](#)

> **Academic B.Tech Web Technology & Cybersecurity Demonstration Project**  
> *Learn. Detect. Stay Safe.*

---

## Table of Contents
1. [Project Overview](#1-project-overview)
2. [Key Features](#2-key-features)
3. [Technology Stack](#3-technology-stack)
4. [System Architecture](#4-system-architecture)
5. [Directory Structure](#5-directory-structure)
6. [XAMPP Setup & Installation](#6-xampp-setup--installation)
7. [Database Setup & Schema](#7-database-setup--schema)
8. [Automated Testing & Verification](#8-automated-testing--verification)
9. [Detector Engine & Scoring Rules](#9-detector-engine--scoring-rules)
10. [Security Protections](#10-security-protections)
11. [Known Limitations & Responsible Design](#11-known-limitations--responsible-design)
12. [Project Demonstration & Walkthrough](#12-project-demonstration--walkthrough)

---

## 1. Project Overview

**PhishGuard** is an educational cybersecurity web application built from scratch to teach students, academic staff, and computer science undergraduates how to identify, inspect, and defend against phishing attacks. 

Unlike black-box scanners, PhishGuard exposes the inner mechanics of cyber deception. It features:
- In-depth awareness modules covering 12 real-world attack vectors.
- A transparent **Educational Static Lexical URL Analyzer** with mathematical heuristic breakdowns.
- An interactive **Cybersecurity Challenge Quiz** with server-side evaluation.
- Realistic **Simulated Phishing Lures** with "Spot the Red Flags" overlays.
- A **Safety Center** containing actionable defense blueprints and a client-side password entropy evaluator.
- Authenticated personal **Dashboard** tracking scan histories and quiz ranks.

---

## 2. Key Features

- **100% Native Web Architecture**: Built strictly with PHP 8+, MySQL, HTML5, CSS3, JavaScript, and Bootstrap 5. No Python, Flask, Django, Node.js, or complex third-party frameworks.
- **Strict Static Heuristic Analysis**: Evaluates URL structural tokens (schemes, IP hosts, subdomain depth, punycode, obfuscations, keywords, and extensions) strictly without making live network calls or resolving DNS.
- **Server-Side Authoritative Grading**: The quiz challenge cannot be manipulated by client-side browser inspection; scores, rankings, and explanations are computed authoritatively by PHP.
- **Enterprise-Grade Security Practices**:
  - Prepared statements with PDO for complete SQL Injection immunity.
  - Cryptographic Synchronizer Token Pattern for CSRF protection on forms and APIs.
  - Adaptive Bcrypt password hashing (`PASSWORD_DEFAULT`).
  - Session security with `HttpOnly`, `SameSite=Lax`, and post-login session ID regeneration.
  - HTML entity encoding via `htmlspecialchars()` to thwart Cross-Site Scripting (XSS).
- **Responsive Cyber-Themed UI**: Modern dark theme with cyan/blue glowing accents, custom cards, and instant theme switching (Dark / Light mode).
- **Real-Time Password Strength System**: Interactive password strength meter with heuristic scoring and real-time confirmation feedback on registration, backed by authoritative server-side policies.

---

## 3. Technology Stack

| Layer | Technology | Purpose |
| :--- | :--- | :--- |
| **Frontend** | HTML5 / CSS3 / JavaScript | Semantic structure, client validations, password entropy tool |
| **UI Framework** | Bootstrap 5.3.3 | Responsive grid system, modal dialogs, navigation |
| **Backend Engine** | PHP 8.2+ | Heuristic analyzer, session management, REST API endpoints |
| **Database** | MySQL / MariaDB (InnoDB) | Relational persistence with foreign keys and prepared statements |
| **Web Server** | Apache (through XAMPP) | HTTP request handling, virtual directory hosting, `.htaccess` |

---

## 4. System Architecture

```text
               +-------------------------------------------+
               |         Client Web Browser                |
               | (HTML5, Bootstrap 5, Dark Theme, JS Fetch)|
               +---------------------+---------------------+
                                     |
                          HTTP GET / POST JSON
                          (with CSRF Tokens)
                                     |
                                     v
               +-------------------------------------------+
               |        Apache Web Server (XAMPP)          |
               |      http://localhost/PhishGuard/         |
               +---------------------+---------------------+
                                     |
                                     v
        +---------------------------------------------------------+
        |                 PHP 8 Application Core                  |
        |                                                         |
        |  +--------------------+       +----------------------+  |
        |  |  Security Layer    |       |   Heuristic Model    |  |
        |  |  - auth.php        |       | - detector_engine.php|  |
        |  |  - csrf.php        |       | - quiz_data.php      |  |
        |  |  - functions.php   |       +----------------------+  |
        |  +--------------------+                                 |
        |            |                                            |
        |            v                                            |
        |  +--------------------+                                 |
        |  |  PDO Database Layer|                                 |
        |  |  (Prepared Stmts)  |                                 |
        |  +--------------------+                                 |
        +----------------------------+----------------------------+
                                     |
                                     v
               +-------------------------------------------+
               |          MySQL Database: phishguard       |
               |  - users (id, username, password_hash)    |
               |  - detection_history (user_id, url, score)|
               |  - quiz_results (user_id, rank, accuracy) |
               +-------------------------------------------+
```

---

## 5. Directory Structure

```text
PhishGuard/
│
├── index.php                 # Landing page (Hero, Workflow, Features, Statistics)
├── awareness.php             # 12-topic cybersecurity curriculum
├── detector.php              # Educational URL Heuristic Analyzer UI
├── quiz.php                  # Interactive 10-question defense challenge
├── examples.php              # 5 simulated phishing scenarios with red flags
├── safety.php                # 8 safety pillars & client-side password entropy tool
├── dashboard.php             # Authenticated user dashboard (History, Risk distribution)
├── about.php                 # Platform architecture, core features & documentation
├── login.php                 # User authentication with bcrypt verification
├── register.php              # Account creation with real-time password strength meter
├── logout.php                # Safe session destruction
├── error.php                 # Custom error handler (400, 403, 404, 405, 500)
├── .htaccess                 # Apache directory indexing and security directives
├── .gitignore                # Git ignore configuration
├── README.md                 # Project documentation
│
├── api/
│   ├── detect.php            # REST endpoint: URL heuristic analysis
│   └── quiz.php              # REST endpoint: Server-side quiz evaluation
│
├── includes/
│   ├── db.php                # PDO database connection with error fallback
│   ├── auth.php              # Session management, registration, login helpers
│   ├── csrf.php              # Synchronizer Token Pattern (CSRF protection)
│   ├── functions.php         # HTML escaping e(), dynamic base_url(), badges
│   ├── header.php            # Shared navbar with theme toggle and auth state
│   └── footer.php            # Shared footer with academic disclaimer
│
├── models/
│   ├── detector_engine.php   # Pure static lexical heuristic analyzer
│   └── quiz_data.php         # Question bank and server-side grading rules
│
├── assets/
│   ├── css/
│   │   └── style.css         # Modern cybersecurity dark theme & responsiveness
│   └── js/
│       ├── app.js            # Theme toggle (Dark/Light) & global utilities
│       ├── detector.js       # Fetch client, loading spinner, score gauge
│       ├── quiz.js           # Quiz flow controller and review renderer
│       └── dashboard.js      # Table search and risk bar animations
│
├── database/
│   └── phishguard.sql        # MySQL database schema and demo user seed
│
└── tests/
    ├── test_detector.php     # CLI unit test for 4 documented cases + edge cases
    ├── test_quiz.php         # CLI unit test for quiz grading & rank thresholds
    ├── test_security.php     # CLI unit test for CSRF, bcrypt, and escaping
    └── test_http_endpoints.php # Full HTTP integration suite (18 assertions)
```

---

## 6. XAMPP Setup & Installation

### Step 1: Place Files in XAMPP `htdocs`
Ensure the project folder is placed inside your XAMPP installation at:
```text
C:\xampp\htdocs\PhishGuard\
```
*(On Windows, a directory junction between your working workspace and `C:\xampp\htdocs\PhishGuard` links both paths dynamically).*

### Step 2: Launch XAMPP Control Panel
1. Open the **XAMPP Control Panel**.
2. Click **Start** next to **Apache**.
3. Click **Start** next to **MySQL**.

### Step 3: Access Application in Web Browser
Open your browser and navigate to:
```text
http://localhost/PhishGuard/
```

---

## 7. Database Setup & Schema

1. Open **phpMyAdmin** at `http://localhost/phpmyadmin/` (or run MySQL CLI).
2. Create the database and tables by importing `database/phishguard.sql`:
   - Click the **Import** tab in phpMyAdmin.
   - Choose the file `C:\xampp\htdocs\PhishGuard\database\phishguard.sql`.
   - Click **Import** (or **Go**).

### Pre-Configured Test Account
For local evaluation and automated testing, a pre-seeded account is included in the database:
- **Username**: `student`
- **Email**: `student@phishguard.local`
- **Password**: `Password123!`

*(You can also freely register new accounts on the `register.php` page).*

---

### Required PHP Extensions
To run PhishGuard, ensure the following extensions are enabled in your PHP runtime (standard in XAMPP `php.ini`):
- `pdo` (Core database abstraction)
- `pdo_mysql` (MySQL/MariaDB driver)
- `session` (Session management and CSRF)
- `json` (REST API payload serialization)
- `curl` (Required for running the automated HTTP integration test script)

---

## 8. Testing & Verification

PhishGuard distinguishes between three categories of testing:
1. **Verified Automated Tests**: Offline unit and algorithm tests executed via PHP CLI.
2. **Environment-Dependent Tests**: Integration tests that depend on live local services (Apache & MySQL in XAMPP).
3. **Manual UI & Accessibility Tests**: Visual verification in modern browsers (Chrome, Edge, Firefox).

---

### Category A: Verified Automated Unit Tests (Offline / Independent)

#### 1. Comprehensive Detector Engine Tests (`tests/test_detector.php`)
Validates all 4 core demonstration cases plus 9 structural edge cases (invalid protocols, empty input, malformed URLs, oversized URLs, `@` obfuscation, Punycode `xn--`, non-standard ports, and `.exe` downloads).
```bash
"C:\xampp\php\php.exe" tests\test_detector.php
```
**Actual Executed Output:**
```text
========================================================
   PHISHGUARD DETECTOR ENGINE - COMPREHENSIVE SUITE     
========================================================
Test #1: Case 1: Legitimate HTTPS website (https://example.com) -> Score: 0, Level: LOW [PASS]
Test #2: Case 2: Insecure Login (http://secure-account-example.com/login/verify) -> Score: 30, Level: MODERATE [PASS]
Test #3: Case 3: Raw IP Host (http://192.0.2.10/account/login) -> Score: 50, Level: HIGH [PASS]
Test #4: Case 4: Shortened Link (https://short.example/abc123) -> Score: 15, Level: LOW [PASS]
Test #5: Reject invalid protocols (javascript:) -> [PASS]
Test #6: Reject invalid protocols (ftp://) -> [PASS]
Test #7: Reject empty URL input -> [PASS]
Test #8: Reject malformed URL without host -> [PASS]
Test #9: Reject excessively long URL (>2048 chars) -> [PASS]
Test #10: Detect @ symbol obfuscation (+20 pts) -> [PASS]
Test #11: Detect Punycode homograph domain (xn--) (+20 pts) -> [PASS]
Test #12: Detect non-standard port (:8443) (+15 pts) -> [PASS]
Test #13: Detect dangerous executable extension (.exe) (+25 pts) -> [PASS]

SUMMARY: 13 / 13 tests passed.
```

#### 2. Server-Side Quiz Grading Tests (`tests/test_quiz.php`)
```bash
"C:\xampp\php\php.exe" tests\test_quiz.php
```
**Actual Executed Output:**
```text
SUMMARY: 5 / 5 tests passed.
- Client confidentiality (answers stripped from client questions): PASS
- 10/10 Score -> 'PhishGuard Master': PASS
- 7/10 Score -> 'Security Sentinel': PASS
- 5/10 Score -> 'Cyber Defender': PASS
- 2/10 Score -> 'Security Recruit': PASS
```

#### 3. Security & CSRF Tests (`tests/test_security.php`)
```bash
"C:\xampp\php\php.exe" tests\test_security.php
```
**Actual Executed Output:**
```text
SUMMARY: 5 / 5 tests passed.
- 64-char cryptographically secure token: PASS
- Hash_equals verification: PASS
- Forged token rejection: PASS
- HTML special characters escaping e(): PASS
- Bcrypt password hashing & verification: PASS
```

---

### Category B: Environment-Dependent Integration Tests (Requires Apache/MySQL)

#### 4. Database Connectivity & Schema Test (`tests/test_db_connect.php`)
*Requires MySQL service started in XAMPP.*
```bash
"C:\xampp\php\php.exe" tests\test_db_connect.php
```
**Actual Executed Output:**
```text
========================================================
       PHISHGUARD DATABASE CONNECTIVITY TEST            
========================================================
Database connection test: Status: SUCCESS
Driver: PDO MySQL (mysql)
Server Version: 10.4.32-MariaDB
Schema Verification: PASSED (Tables: users, detection_history, quiz_results)
Demo Account Verification: ACTIVE (student@phishguard.local)
SUMMARY: Database connection and schema verified!
```

#### 5. End-to-End HTTP Integration Suite (`tests/test_http_endpoints.php`)
*Requires Apache service running on `http://localhost/PhishGuard/` (or configure `PHISHGUARD_BASE_URL`).*
```bash
"C:\xampp\php\php.exe" tests\test_http_endpoints.php
```
**Actual Executed Output:**
```text
========================================================
    PHISHGUARD HTTP INTEGRATION & API TEST SUITE        
========================================================
Target Base URL: http://localhost/PhishGuard

- GET views (index, awareness, detector, quiz, examples, safety, about, login, register): All HTTP 200 PASS
- GET error.php: HTTP 404 PASS
- Protected internal directories (/includes/, /models/, /database/): All blocked with HTTP 403 Forbidden PASS
- GET api/quiz.php: HTTP 200 PASS (returns 10 sanitized questions + CSRF token)
- POST api/detect.php (4 core test cases): All HTTP 200 with deterministic scores PASS
- POST api/detect.php (invalid CSRF): HTTP 403 Forbidden PASS
- POST api/detect.php (empty URL): HTTP 400 Bad Request PASS
- POST api/quiz.php (evaluation): HTTP 200 PASS
- GET logout.php: HTTP 405 Method Not Allowed PASS
- POST logout.php with invalid CSRF: HTTP 403 Forbidden PASS

SUMMARY: 23 / 23 tests passed.
```

---

### Category C: Manual Verification
- **Dark/Light Mode**: Clicked the sun/moon icon in the navbar; theme persists via `localStorage`.
- **Client-Side Password Evaluator**: Tested password entropy strings on `safety.php` in Chrome; verified 100% in-browser evaluation with zero network requests.
- **Simulated Red Flags**: Inspected the 5 attack scenarios in `examples.php`; verified all simulated links are disabled.

---

## 9. Detector Engine & Scoring Rules

The static heuristic analyzer inspects purely lexical attributes:

| Heuristic Factor | Condition | Point Weight |
| :--- | :--- | :---: |
| **Protocol** | Unencrypted plain `http://` | **+15** |
| **Protocol** | Encrypted `https://` | **0** |
| **Host Format** | Hostname is a raw numeric IPv4 or IPv6 address | **+25** |
| **URL Shortener** | Known shortening service or `short.*` domain | **+15** |
| **Domain Structure** | Hyphenated domain combining security keywords | **+5** |
| **Subdomain Depth** | More than 4 dot-separated labels in host | **+10** |
| **Punycode** | Hostname contains internationalized `xn--` | **+20** |
| **Authority Obfuscation** | Contains `@` symbol in URL | **+20** |
| **Path Obfuscation** | Consecutive double slashes `//` in path | **+15** |
| **Encoding** | Multiple hexadecimal `%xx` sequences | **+15** |
| **Non-Standard Port** | Explicit port specified that is not 80 or 443 | **+15** |
| **Sensitive Keywords** | Path contains `login`, `verify`, `account`, `security`, `password` | **+10** |
| **Executable Extension** | Path ends in `.exe`, `.scr`, `.bat`, `.vbs`, `.apk` | **+25** |
| **URL Length** | Total string exceeds 100 characters | **+10** |

### Risk Tiers
- **0 – 24**: `LOW RISK` (Green)
- **25 – 49**: `MODERATE RISK` (Yellow)
- **50 – 74**: `HIGH RISK` (Orange/Red)
- **75 – 100**: `VERY HIGH RISK` (Red)

---

## 10. Security Protections

1. **SQL Injection**: Every query uses PDO parameterized statements with bound variables (`:username`, `:email`, `:uid`).
2. **Cross-Site Request Forgery (CSRF)**: Cryptographically secure 32-byte tokens generated using `random_bytes(32)` and validated using timing-attack safe `hash_equals()`.
3. **Session Fixation**: Session IDs are rotated via `session_regenerate_id(true)` upon successful credential authentication.
4. **Session Hijacking**: Cookie parameters enforce `HttpOnly` and `SameSite=Lax`.
5. **Cross-Site Scripting (XSS)**: All dynamically echoed user data is passed through `htmlspecialchars($val, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')`.
6. **Credential Protection**: Passwords are never stored in plaintext or reversible formats; only adaptive Bcrypt hashes are saved.
7. **Account Enumeration Defense**: Login authentication errors use the generic message `"Invalid username or password."`

---

## 11. Known Limitations & Responsible Design

In alignment with sound engineering principles:
- **No Live Network Probing**: PhishGuard deliberately does not browse submitted URLs, execute JavaScript, download binaries, or fetch external DOM trees. This eliminates server infection risks and preserves user privacy.
- **SSL Misconception**: Attackers can obtain free valid SSL certificates for phishing sites. An HTTPS scheme scores 0 points, but other structural markers (deceptive subdomains, sensitive keywords) trigger defensive points.
- **Academic Scope**: PhishGuard is an educational heuristic model designed for coursework, laboratory tests, and project evaluation. It does not replace enterprise threat feeds like Google Safe Browsing or commercial Web Application Firewalls (WAFs).

---

## 12. Project Demonstration & Walkthrough

### Recommended Presentation Flow (5 Minutes)
1. **Introduction**: Open `http://localhost/PhishGuard/index.php`. Explain the objective: addressing the human element in cybersecurity through education and transparent static heuristics.
2. **Heuristic Detector**: Navigate to `detector.php`. Click each of the 4 quick test case buttons:
   - `https://example.com` (0 / LOW)
   - `http://secure-account-example.com/login/verify` (30 / MODERATE)
   - `http://192.0.2.10/account/login` (50 / HIGH)
   - `https://short.example/abc123` (15 / LOW)
   Demonstrate the "Why This Score?" breakdown table, detected indicator chips, and safety recommendations.
3. **Interactive Quiz**: Go to `quiz.php`. Answer the questions and submit to show real-time server-side evaluation, rank calculation, and educational explanations.
4. **Simulated Scenarios**: Show `examples.php` to explain how parcel fees, quota warnings, and banking wire alerts deceive victims.
5. **Safety Center**: Open `safety.php` and test password passphrases in the real-time entropy evaluator.
6. **Dashboard & History**: Log in with evaluation account (`student` / `Password123!`), view `dashboard.php`, and show personal detection logs and risk breakdown bars.
7. **System Architecture & About**: Open `about.php` to review platform architecture, lexical heuristics, and defense-in-depth security mechanisms.

