const CACHE_NAME = 'my-site-cache-v1';
const urlsToCache = [
  '/',
  '/productos/Laptop',
  '/home',
  '/assets/styles.css',
  '/assets/Script.js',
  '/media',
  '/icons/icon-192x192.png'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        return response || fetch(event.request);
      })
  );
});
