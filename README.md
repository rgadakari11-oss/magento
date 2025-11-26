# Magento 2 (Windows + XAMPP) – Project Setup & Deployment Guide

This repository contains a Magento 2 Open Source project configured for **local development on Windows using XAMPP**.

---

# ✅ System Requirements (Windows)

* **Windows 10 / 11**
* **XAMPP (7.4+ / PHP 8.1+)**
* **MySQL / MariaDB (Port 3306 or 3307)**
* **Composer 2+**
* **Git for Windows**
* **Node.js (optional)**

---

# 🚀 1. Clone the Repository (Windows)

Open **PowerShell** or **Git Bash**:

```
git clone https://github.com/rgadakari11-oss/magento.git

```

---


# 🗄 3. Database Configuration (XAMPP)

1. Open **phpMyAdmin**
2. Create a database (example: `magento`)
3. Update the file:
   `app/etc/env.php`

Example (for XAMPP MySQL on port 3307):

```
'db' => [
    'host' => '127.0.0.1:3307',
    'dbname' => 'magento',
    'username' => 'root',
    'password' => '',
],
```

---

# 🔧 4. Magento Commands (Windows PowerShell)

### Upgrade Magento

```
php bin/magento setup:upgrade
```

### Deploy static content

```
php bin/magento setup:static-content:deploy -f
```

### Clear cache

```
php bin/magento cache:flush
```

composer install
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

**🔍 Install & Configure OpenSearch (Windows)1. Download OpenSearch Windows ZIP

From: https://opensearch.org

2. Extract and open config/opensearch.yml

Add these lines:

plugins.security.disabled: true
discovery.type: single-node
network.host: 127.0.0.1
http.port: 9200
3. Start OpenSearch

Open PowerShell inside the OpenSearch folder:

.\bin\opensearch.bat
