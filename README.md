# Trinity Training Camp WP Theme
**Site:** [trinitytrainingcamp.com](https://trinitytrainingcamp.com/)

### Objective
Owners want to promote their virtual training programs. Their virtual programs are hosted through a third party.

## Page Templates

```php

 /* Template Name: Trainerize */

 $json = file_get_contents('https://trinitytrainingcamp1.trainerize.com');
 echo json_encode(json_decode($json, true);

```

## Road Blocks

**Permalinks**
Wordpress permalink option "Post name" creates a 404 when the page is loaded.

```
$ sudo apt update 
```


**Get File Content**
What is the best way to display Tranerize pages within a page template of TTC site?


### References
**WordPress**
- [Debugging](https://wordpress.org/support/article/debugging-in-wordpress/)

**PHP**
https://wordpress.org/support/article/using-permalinks/

Cross-domain Content Using a PHP Proxy

Fetch Cross-domain Content Using a PHP Proxy
https://www.htmlgoodies.com/beyond/php/fetch-cross-domain-content-using-a-php-proxy.html

Cross Domain Mapping Workaround - PHP Proxy
https://www.youtube.com/watch?v=Ov8wSQwLPpI

---
![Developed By Elwood Berry](https://elwoodberry.dev/wp-content/uploads/2020/10/elwoodberry_logo.png)

# H1
## H2
### H3

**bold text**

*italicized text*

> blockquote

1. First item
2. Second item
3. Third item

- First item
- Second item
- Third item

`code`
