# WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleTransferredWasteListItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dismantle_transferred_waste_id** | **string** | Prowadzący stację demontażu - Przekazane odpady | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Data utworzenia | [optional] 
**waste_code** | **string** | Kod odpadu | [optional] 
**recycled_waste_mass** | **double** | Masa odpadów przekazanych w kraju do recyklingu [Mg] | [optional] 
**energy_recovery_waste_mass** | **double** | Masa odpadów przekazanych w kraju do odzysku energii [Mg] | [optional] 
**other_than_recycled_waste_mass** | **double** | Masa odpadów przekazanych w kraju innemu procesowi odzysku [Mg] | [optional] 
**shredded_waste_mass** | **double** | Masa odpadów przekazanych w kraju do rozdrobnienia w strzępiarce [Mg] | [optional] 
**disposed_waste_mass** | **double** | Masa odpadów przekazanych w kraju do unieszkodliwienia [Mg] | [optional] 
**transferred_abroad_waste_mass** | **double** | Masa odpadów przekazanych do innego kraju [Mg] | [optional] 
**transferred_abroad** | **bool** | Odpady przekazane do innego kraju | [optional] 
**transferred_abroad_transfer_date** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**receive_confirmation_date** | [**\DateTime**](\DateTime.md) | Data otrzymania potwierdzenia | [optional] 
**created_by_user** | **string** | Utworzone przez użytkownika | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


