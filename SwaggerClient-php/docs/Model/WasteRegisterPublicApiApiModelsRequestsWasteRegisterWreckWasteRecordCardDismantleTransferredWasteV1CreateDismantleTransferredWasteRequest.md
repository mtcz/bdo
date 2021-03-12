# WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1CreateDismantleTransferredWasteRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kepw_id** | **string** | Id karty ewidencji pojazdów wycofanych z eksploatacji | [optional] 
**waste_code_id** | **int** | Id kodu odpadu | [optional] 
**kpo_id** | **string** | Id karty przekazania odpadów | [optional] 
**recycled_waste_mass** | **double** | Masa odpadów poddanych recyklingowi [Mg] | [optional] 
**energy_recovery_waste_mass** | **double** | Masa odpadów poddanych odzyskowi energii [Mg] | [optional] 
**other_than_recycled_waste_mass** | **double** | Masa odpadów przekazanych w kraju innemu procesowi odzysku [Mg] | [optional] 
**shredded_waste_mass** | **double** | Masa odpadów przekazanych w kraju do rozdrobnienia w strzępiarce [Mg] | [optional] 
**disposed_waste_mass** | **double** | Masa odpadów przekazanych w kraju do unieszkodliwienia [Mg] | [optional] 
**additional_info** | **string** | Informacje dodatkowe | [optional] 
**transferred_abroad** | **bool** | Odpady przekazane do innego kraju | [optional] 
**transferred_abroad_recycled** | **bool** | Recykling | [optional] 
**transferred_abroad_waste_mass** | **double** | Masa odpadów przekazanych do innego kraju [Mg] | [optional] 
**transferred_abroad_transfer_date** | [**\DateTime**](\DateTime.md) | Data rozpoczęcia transportu | [optional] 
**transferred_abroad_waste_process_id** | **int** | Id przewidywanej metody przetwarzania | [optional] 
**country_id** | **int** | Id kraju | [optional] 
**locality** | **string** | Miejscowość | [optional] 
**street** | **string** | Ulica | [optional] 
**building_number** | **string** | Numer budynku | [optional] 
**local_number** | **string** | Numer lokalu | [optional] 
**postal_code** | **string** | Kod pocztowy | [optional] 
**is_road_transport** | **bool** | Rodzaj środka transportu: drogowy | [optional] 
**is_railway_transport** | **bool** | Rodzaj środka transportu: kolejowy | [optional] 
**is_maritime_transport** | **bool** | Rodzaj środka transportu: morski | [optional] 
**is_air_transport** | **bool** | Rodzaj środka transportu: powietrzny | [optional] 
**is_inland_water_transport** | **bool** | Rodzaj środka transportu: wodny-śródlądowy | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**waste_mass_from_kpo** | **double** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


