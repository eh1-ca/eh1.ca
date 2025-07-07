# eh1.ca Static Website

This repository contains the static site for [eh1.ca](https://eh1.ca), the homepage of a Canadian social network. It includes basic project information and multilingual support with English and French landing pages.

## Pages

- `/index-en.html` – English homepage  
- `/index-fr.html` – French (Canadian) homepage  
- `/index.php` – Auto-detects language and redirects to the French page if preferred  
- `/send.php` – Script that sends an email with subscription information  

- `/error-en.html` – English error page  
- `/error-fr.html` – French (Canadian) error page  

- `/thank-you-en.html` – English thank-you page  
- `/thank-you-fr.html` – French (Canadian) thank-you page  

- `/eh.png` – Temporary logo (to be replaced)

## Deployment

The site is deployed at [https://eh1.ca](https://eh1.ca). You can fork and adapt this template for other bilingual Canadian web projects.

## Contributing

Pull requests are welcome! If you’d like to help with translation or accessibility, feel free to fork and submit a PR.

### To add or improve content:
1. Update the corresponding HTML files (`index-en.html`, `index-fr.html`)
2. Ensure semantic HTML and proper metadata
3. To add new languages, create a new file using the ISO 639-1 code (e.g., `index-es.html` for Spanish)

## License

This website is open-source and available under the [MIT License](LICENSE).
