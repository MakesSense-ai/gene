# Leadership Assessment Website - Deployment Guide

This document provides instructions for deploying the Leadership Assessment Website.

## Prerequisites

1.  A web server (e.g., Apache, Nginx) with PHP support (PHP 7.4 or newer recommended).
2.  Ensure PHP session support is enabled on your server.

## Deployment Steps

1.  **Upload Files:**
    *   Extract the contents of the `leadership-assessment-website.zip` file.
    *   Upload all the extracted files and folders (`index.php`, `results.php`, `assessment_data.php`, `css/`, `js/`, `images/`) to your web server's document root (e.g., `htdocs`, `www`, `public_html`) or a subdirectory within it.

2.  **Directory Structure:**
    Ensure the following directory structure is maintained on the server:
    ```
    your-web-root/
    ├── index.php
    ├── results.php
    ├── assessment_data.php
    ├── css/
    │   ├── style.css
    │   └── pyramid.css
    ├── js/
    │   └── script.js
    └── images/
        ├── Gene-Hammett-Photo.jpeg
        └── GeneHammett-Logo.png
    ```

3.  **Permissions (if necessary):**
    *   Ensure your web server has read access to all files.
    *   PHP might need write access to a session save path (usually configured in `php.ini` and handled by the server environment).

4.  **Accessing the Website:**
    *   Once deployed, you can access the website by navigating to your domain (e.g., `http://yourdomain.com/`) or the subdirectory where you placed the files (e.g., `http://yourdomain.com/assessment/`).

## Functionality Overview

*   **`index.php`**: Handles the landing page and the assessment questions. It uses PHP sessions to track user progress and answers.
*   **`assessment_data.php`**: Contains the array of assessment questions, options, and the detailed content for each leadership level (descriptions, bottlenecks, quick wins, long-term benefits).
*   **`results.php`**: Calculates the user's leadership level based on their answers and displays the results page, including the stylized pyramid, insights, and the sales letter.
*   **`css/`**: Contains stylesheets for the website (`style.css` for general styling, `pyramid.css` for the leadership pyramid visualization).
*   **`js/`**: Contains `script.js` for any client-side enhancements (currently includes minor UI helpers like progress bar animation and scroll adjustment).
*   **`images/`**: Contains the logo and Gene Hammett's photo.

## Customization

*   **Questions & Results Content:** All assessment questions, answer options, leadership level descriptions, bottlenecks, quick wins, and long-term benefits can be modified directly in the `assessment_data.php` file.
*   **Styling:** Visual appearance can be customized by editing `css/style.css` and `css/pyramid.css`.
*   **Sales Letter & CTA:** The sales letter text and the call-to-action link on the results page can be modified within `results.php` (variables `$sales_letter_headline`, `$sales_letter_text`, `$cta_link`, `$cta_text`).

This website is designed to be mobile-first and responsive. It uses Bootstrap 5.3 for its layout and components.
