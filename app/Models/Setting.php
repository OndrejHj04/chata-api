<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'allow_mail_sending',
        'main_application_email',
        'registration_document_spreadsheet',
        'whole_object',
        'public_payment',
        'employees_payment',
        'ZO_payment',
        'bank_account_number',
        'payment_symbol_format'
    ];

    /**
     * Get the singleton instance of settings
     */
    public static function getInstance()
    {
        return self::find(1);
    }

    /**
     * Check if mail sending is allowed
     */
    public static function isMailSendingAllowed()
    {
        return self::getInstance()->allow_mail_sending;
    }

    /**
     * Get the main application email
     */
    public static function getMainApplicationEmail()
    {
        return self::getInstance()->main_application_email;
    }

    /**
     * Get the registration document spreadsheet
     */
    public static function getRegistrationDocumentSpreadsheet()
    {
        return self::getInstance()->registration_document_spreadsheet;
    }

    /**
     * Get the whole object payment amount
     */
    public static function getWholeObjectPayment()
    {
        return self::getInstance()->whole_object;
    }

    /**
     * Get the public payment amount
     */
    public static function getPublicPayment()
    {
        return self::getInstance()->public_payment;
    }

    /**
     * Get the employees payment amount
     */
    public static function getEmployeesPayment()
    {
        return self::getInstance()->employees_payment;
    }

    /**
     * Get the ZO payment amount
     */
    public static function getZOPayment()
    {
        return self::getInstance()->ZO_payment;
    }

    /**
     * Get the bank account number
     */
    public static function getBankAccountNumber()
    {
        return self::getInstance()->bank_account_number;
    }

    /**
     * Get the payment symbol format
     */
    public static function getPaymentSymbolFormat()
    {
        return self::getInstance()->payment_symbol_format;
    }
}