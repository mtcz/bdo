# WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | Numer karty | [optional] 
**calendar_year** | **string** | Rok kalendarzowy | [optional] 
**waste_code_and_description** | **string** | Kod i opis odpadu | [optional] 
**is_waste_generating** | **bool** | W - wytwarzanie odpadów | [optional] 
**is_waste_collecting** | **bool** | Zb - zbieranie odpadów | [optional] 
**is_salvage** | **bool** | Od - odzysk | [optional] 
**is_neutralization** | **bool** | Un - unieszkodliwianie | [optional] 
**waste_code_extended** | **bool** | Kod ex | [optional] 
**waste_code_extended_description** | **string** | Rodzaj odpadu ex | [optional] 
**hazardous_waste_reclassification** | **bool** | Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne | [optional] 
**hazardous_waste_reclassification_description** | **string** | Rodzaj odpadu | [optional] 
**company_name** | **string** | Nazwa lub imię i nazwisko | [optional] 
**company_adress** | **string** | Adres | [optional] 
**company_identification_number** | **string** | Numer rejestrowy | [optional] 
**company_nip** | **string** | NIP | [optional] 
**company_nip_eu** | **string** | NIP europejski | [optional] 
**eup_name** | **string** | Nazwa miejsca prowadzenia działalności | [optional] 
**eup_identification_number** | **string** | Numer miejsca prowadzenia działalności | [optional] 
**eup_adress** | **string** | Adres miejsca prowadzenia działalności | [optional] 
**items_list** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPageList[]**](WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPageList.md) | Lista wpisów | [optional] 
**generated_waste_mass_installation_sum** | **double** | Łączna masa wytworzonych odpadów w związku z eksploatacją instalacj | [optional] 
**generated_waste_mass_excluding_installation_sum** | **double** | Łączna masa wytworzonych odpadów poza instalacją | [optional] 
**generated_waste_mass_installation_from_services_sum** | **double** | Łączna maasa wytworzonych odpadów w wyniku świadczenia usług i/lub działalności w zakresie obiektów liniowych | [optional] 
**generated_waste_mass_excluding_installation_from_services_sum** | **double** | Łączna maasa wytworzonych odpadów w wyniku świadczenia usług i/lub działalności w zakresie obiektów liniowych | [optional] 
**excavated_waste_mass_sum** | **double** | Łączna maasa odpadów wydobytych ze składowiska | [optional] 
**collected_waste_mass_sum** | **double** | Łączna masa odpadów przyjętych przez posiadacza odpadów | [optional] 
**treated_waste_mass_sum** | **double** | Łączna masa przetwarzanych odpadów | [optional] 
**treated_pcb_content_sum** | **double** | Łączna zawartość PCB w odpadzie [%] | [optional] 
**forwarded_country_waste_mass_sum** | **double** | Łączna masa przekazanych odpadów w kraju | [optional] 
**forwarded_abroad_waste_mass_sum** | **double** | Łączna masa odpadów przekazanych za granicę [Mg] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


