# FOSSGIS Conference

Official websites for the FOSSGIS conferences.

## Directories

- *files:* Contains supplementary files; Currently only Photoshop and Pixelmator files of the website header image
- *inc:* Includes for sidebar navigation and web site header

All other directories should be self explaining.

## Docker

You can run the website locally with [`docker-compose`](https://docs.docker.com/compose/).

Run the following command in your terminal:

```bash
docker-compose up -d
```

After that you can access the website with your browser, e.g. [`http://localhost/2019`](https://localhost/2019). You are
able to change content in this project and see the changes in your browser after a reload.

When you are finished you can stop the server by running the following command in your terminal:

```bash
docker-compose down
```

## Third party content

### Fonts

The Droid font which is available in this repository is from Google and available under the terms
of the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0)

### JavaScript

**[Leaflet](https://leafletjs.com)** is © 2010-2018, Vladimir Agafonkin, ©
2010-2011, CloudMade and available under the [2-clause BSD
license](https://github.com/Leaflet/Leaflet/blob/master/LICENSE).

The OpenLayers 2 library in this repository is © 2006-2013 by OpenLayers
Contributors and was published under the [2-clause BSD
license](https://openlayers.org/dev/license.txt).

OpenLayers' compressed code contains code under the following licenses (For
uncompressed versions of the code used, please see the OpenLayers Github
repository: <https://github.com/openlayers/ol2>):

* [XMLHttpRequest.js](http://code.google.com/p/xmlhttprequest), © 2007 Sergey
  Ilinsky (http://www.ilinsky.com), published under the [Apache License
  2.0](http://www.apache.org/licenses/LICENSE-2.0)
* OpenLayers.Util.pagePosition is based on Yahoo's getXY method, which is ©
  2006, Yahoo! Inc. and was published under the terms of the [BSD 3-clause
  license](https://opensource.org/licenses/BSD-3-Clause)
