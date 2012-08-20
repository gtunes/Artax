<?php

namespace Artax\Http;

/**
 * This interface is modeled after RFC 2616, section 4:
 * http://www.w3.org/Protocols/rfc2616/rfc2616-sec4.html
 */
interface Message {

    /**
     * Retrieve the HTTP message entity body in string form
     */
    function getBody();
    
    /**
     * Retrieve the HTTP message entity body as a stream resource (if available)
     */
    function getBodyStream();
    
    /**
     * Assign an entity body to the HTTP message
     * 
     * @param mixed $bodyStringOrResource A string or stream resource
     */
    function setBody($bodyStringOrResource);
    
    /**
     * Does the HTTP message contain the specified header field?
     * 
     * @param string $headerName
     */
    function hasHeader($headerName);
    
    /**
     * Retrieve the value of the specified header field
     * 
     * @param string $headerName
     */
    function getHeader($headerName);

    /**
     * Retrieve a traversable key-value list of header fields and their values
     */
    function getAllHeaders();

    /**
     * Assign a message header
     * 
     * @param string $headerName
     * @param string $value
     */
    function setHeader($headerName, $value);
    
    /**
     * Assign all header values from a traversable key-value list of header fields and their values
     * 
     * @param mixed $traversableHeaders
     */
    function setAllHeaders($traversableHeaders);
    
    /**
     * Assign a header value from a raw string (e.g. Header-Name: some value)
     * 
     * @param string $rawHeaderStr
     */
    function setRawHeader($rawHeaderStr);
    
    /**
     * Clear all existing headers and assign matched headers from the specified raw string
     * 
     * @param string $rawHeaderStr
     */
    function setAllRawHeaders($rawHeaderStr);
    
    /**
     * Remove the specified header from the message
     * 
     * @param string $headerName
     */
    function removeHeader($headerName);
    
    /**
     * Clear all assigned headers from the message
     */
    function clearAllHeaders();
    
    /**
     * Retrieve the numerical HTTP version supported by the message (without the "HTTP/" prefix)
     */
    function getHttpVersion();
    
    /**
     * Assign the HTTP version supported by the message (without the "HTTP/" prefix)
     * 
     * @param float $decimalVersionNumer
     */
    function setHttpVersion($decimalVersionNumer);

    /**
     * Retrieve the HTTP message formatted for transport
     */
    function __toString();
}
