# CodeIgniter-Sitemap-for-SEO
The site map is very important. Dynamic XML file creation is required so that it is not necessary to manually add it to the Sitemap at every new link. With the help of this generated XML document, we can add structure to the Google search console.A sitemap is a file where you can list the web pages of your site to tell Google and other search engines about the organization of your site content. Search engine web crawlers like Googlebot read this file to more intelligently crawl your site.

The Sitemap is very important to Google. We will create an XML (Extensible Markup Language) structure that Google can read and easily insert into Google Search Engine. However, to avoid having to manually add new links to the XML structure every time, we will create dynamic XML that Google can read and detect every new link. Because it depends on your website and the tables in the database, you need to know where any URLs are located. In this case, we will output URLs from three tables. The links are in the table page, table article and table category.

## Set up the route located in: <project root directory>/application/config/routes.php
```
$route['default_controller'] = 'main';
$route['404_override'] = 'pagenotfound';
$route['translate_uri_dashes'] = FALSE;

$route['sitemap\.xml'] = "Sitemap/index";
```

Visit on page: https://dev-all.eu/blog/codeigniter-sitemap-for-seo
