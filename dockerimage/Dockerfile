FROM php:8.0.5-fpm-alpine

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

#Adding crashing values
RUN echo "zend_extension = opcache" >> "$PHP_INI_DIR/php.ini"
RUN echo "opcache.enable" >> "$PHP_INI_DIR/php.ini"
RUN echo "opcache.jit = tracing" >> "$PHP_INI_DIR/php.ini"
RUN echo "opcache.jit_buffer_size = 100M" >> "$PHP_INI_DIR/php.ini"