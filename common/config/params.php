<?php

return [
    'adminEmail' => 'ntezitechnology@gmail.com',
    'supportEmail' => 'ntezitechnology@gmail.com',
    'senderEmail' => 'noreply@ntezitechnology.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,

    /*USER*/
    'activated_user' => 1,
    'deactivated_user' => 0,
    'user_role' => 0,
    'super_user_role' => 1,
    'admin_role' => 2,
    'super_admin_role' => 3,

    /*MASTER*/
    'default_session_company_id' => 1,
    'session_company_id' => 'SELECTED_COMPANY_ID',

    /*ITEM*/
    'item_status_active' => 1,
    'item_status_inactive' => 0,

    /*CART*/
    'cart_status_deleted' => 0,
    'cart_status_pending' => 1,
    'cart_status_saved' => 2,
    'cart_status_checked' => 3,

    'cart_type_invoice' => 0,
    'cart_type_proforma' => 1,
    'cart_type_order' => 2,
    'cart_type_purchase' => 3,

    /*CART LIST*/
    'cart_list_status_deleted' => 0,
    'cart_list_status_ok' => 1,

    'cart_list_type_unit' => 1,
    'cart_list_type_package' => 0,

    /*STOCK*/
    'stock_type_refund' => 0,
    'stock_type_purchase' => 1,
    'stock_type_inventory' => 2,

    'stock_status_available' => 1,
    'stock_status_out' => 0,

    /*PURCHASE*/
    'purchase_status_deleted' => 0,
    'purchase_status_unrecorded' => 1,
    'purchase_status_recorded' => 2,

    /*INVENTORY*/
    'inventory_status_in' => 1,
    'inventory_status_out' => 0,

    /*INVOICE*/
    'invoice_status_unrecorded' => 0,
    'invoice_status_recorded' => 1,
    'invoice_status_cancelled' => 2,

    'invoice_type_cash' => 1,
    'invoice_type_credit' => 0,

    /*PROJECT*/
    'project_status_active' => 1,
    'project_status_deleted' => 0,
];
