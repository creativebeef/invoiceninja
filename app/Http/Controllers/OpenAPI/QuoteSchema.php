<?php
/**
 * @OA\Schema(
 *   schema="Quote",
 *   type="object",
 *       @OA\Property(property="id", type="string", example="Opnel5aKBz", description="_________"),
 *       @OA\Property(property="user_id", type="string", example="", description="__________"),
 *       @OA\Property(property="assigned_user_id", type="string", example="", description="__________"),
 *       @OA\Property(property="company_id", type="string", example="", description="________"),
 *       @OA\Property(property="client_id", type="string", example="", description="________"),
 *       @OA\Property(property="status_id", type="string", example="", description="________"),
 *       @OA\Property(property="number", type="string", example="QUOTE_101", description="The quote number - is a unique alpha numeric number per quote per company"),
 *       @OA\Property(property="po_number", type="string", example="", description="________"),
 *       @OA\Property(property="terms", type="string", example="", description="________"),
 *       @OA\Property(property="public_notes", type="string", example="", description="________"),
 *       @OA\Property(property="private_notes", type="string", example="", description="________"),
 *       @OA\Property(property="footer", type="string", example="", description="________"),
 *       @OA\Property(property="custom_value1", type="string", example="", description="________"),
 *       @OA\Property(property="custom_value2", type="string", example="", description="________"),
 *       @OA\Property(property="custom_value3", type="string", example="", description="________"),
 *       @OA\Property(property="custom_value4", type="string", example="", description="________"),
 *       @OA\Property(property="tax_name1", type="string", example="", description="________"),
 *       @OA\Property(property="tax_name2", type="string", example="", description="________"),
 *       @OA\Property(property="tax_rate1", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="tax_rate2", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="tax_name3", type="string", example="", description="________"),
 *       @OA\Property(property="tax_rate3", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="total_taxes", type="number", format="float", example="10.00", description="The total taxes for the quote"),
 *       @OA\Property(property="line_items", type="object", example="", description="_________"),
 *       @OA\Property(property="amount", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="balance", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="discount", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="partial", type="number", format="float", example="10.00", description="_________"),
 *       @OA\Property(property="is_amount_discount", type="boolean", example=true, description="_________"),
 *       @OA\Property(property="is_deleted", type="boolean", example=true, description="_________"),
 *       @OA\Property(property="uses_inclusive_taxes", type="boolean", example=true, description="Defines the type of taxes used as either inclusive or exclusive"),
 *       @OA\Property(property="date", type="string", format="date", example="1994-07-30", description="The Quote Date"),
 *       @OA\Property(property="last_sent_date", type="string", format="date", example="1994-07-30", description="The last date the quote was sent out"),
 *       @OA\Property(property="next_send_date", type="string", format="date", example="1994-07-30", description="The Next date for a reminder to be sent"),
 *       @OA\Property(property="partial_due_date", type="string", format="date", example="1994-07-30", description="_________"),
 *       @OA\Property(property="due_date", type="string", format="date", example="1994-07-30", description="_________"),
 *       @OA\Property(property="settings",ref="#/components/schemas/CompanySettings"),
 *       @OA\Property(property="last_viewed", type="number", format="integer", example="1434342123", description="Timestamp"),
 *       @OA\Property(property="updated_at", type="number", format="integer", example="1434342123", description="Timestamp"),
 *       @OA\Property(property="archived_at", type="number", format="integer", example="1434342123", description="Timestamp"),
 *       @OA\Property(property="custom_surcharge1", type="number", format="float", example="10.00", description="First Custom Surcharge"),
 *       @OA\Property(property="custom_surcharge2", type="number", format="float", example="10.00", description="Second Custom Surcharge"),
 *       @OA\Property(property="custom_surcharge3", type="number", format="float", example="10.00", description="Third Custom Surcharge"),
 *       @OA\Property(property="custom_surcharge4", type="number", format="float", example="10.00", description="Fourth Custom Surcharge"),
 *       @OA\Property(property="custom_surcharge_taxes", type="boolean", example=true, description="Toggles charging taxes on custom surcharge amounts"),
 * )
 */