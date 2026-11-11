# Præoperativ Udrensning (DCCG) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Præoperativ Udrensning (DCCG)**

## ValueSet: Præoperativ Udrensning (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PraeoperativUdrensningDCCG | *Version*:2.27.3 |
| Active as of 2022-11-09 | *Computable Name*:PraeoperativUdrensningDCCG |

 
Præoperativ Udrensning (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "PraeoperativUdrensningDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PraeoperativUdrensningDCCG",
  "version" : "2.27.3",
  "name" : "PraeoperativUdrensningDCCG",
  "title" : "Præoperativ Udrensning (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Præoperativ Udrensning (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentAdministrationType",
      "concept" : [{
        "code" : "peroral",
        "display" : "Peroral"
      },
      {
        "code" : "rectum",
        "display" : "Rektal"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      },
      {
        "code" : "ukn",
        "display" : "Ukendt kode"
      }]
    }]
  }
}

```
