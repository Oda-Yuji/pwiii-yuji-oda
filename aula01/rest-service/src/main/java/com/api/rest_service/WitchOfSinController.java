package com.api.rest_service;

import java.util.concurrent.atomic.AtomicLong;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class WitchOfSinController {

    private static final String template = "Hello, Witch of %s!";
    private final AtomicLong counter = new AtomicLong();

    @GetMapping("/witch")
    public WitchOfSin witch(@RequestParam(defaultValue = "Sin") String sin) {
        return new WitchOfSin(counter.incrementAndGet(), template.formatted(sin));
    }
}