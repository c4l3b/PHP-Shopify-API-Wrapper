<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getRefund() method
         *
         *    reference: http://docs.shopify.com/api/refund
         */
        "getRefund" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/refunds/{id}.json",
            "summary" => "Receive a singe refund.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the refund.",
                    "required" => true
                ),
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        "createRefund" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/refunds.json",
            "summary" => "Create a new refund for an order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the order to refund",
                    "required" => true,
                ),
                "refund" => array(
                    "location" => "json",
                    "parameters" => array(
                        "restock" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Boolean, whether or not to add the line items back to the store inventory.",
                        ),
                        "notify" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Boolean, set to <code>true</code> to send a refund notification to the customer.",
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "An optional comment attached to a refund.",
                        ),
                        "shipping" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Object to specify how much shipping to refund.",
                        ),
                        "refund_line_items" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Array of line item IDs and quantities to refund",
                        ),
                        "transactions" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Array of transactions to process as refunds.",
                        ),
                    )
                )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(),
);