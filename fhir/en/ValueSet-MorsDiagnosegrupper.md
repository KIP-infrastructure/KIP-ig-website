# Mors Diagnosegrupper (DNSL) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosegrupper (DNSL)**

## ValueSet: Mors Diagnosegrupper (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnosegrupper | *Version*:2.27.0 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnosegrupper |

 
Vurdering af en given behandling 

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
  "id" : "MorsDiagnosegrupper",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnosegrupper",
  "version" : "2.27.0",
  "name" : "MorsDiagnosegrupper",
  "title" : "Mors Diagnosegrupper (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Vurdering af en given behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "various",
        "display" : "Forskelligt"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosegrupper",
      "concept" : [{
        "code" : "infektion",
        "display" : "Infektioner"
      },
      {
        "code" : "kardinal",
        "display" : "Kardiale årsager"
      },
      {
        "code" : "Lever",
        "display" : "Leverlidelser"
      },
      {
        "code" : "social",
        "display" : "Socialt"
      },
      {
        "code" : "ulykker",
        "display" : "Ulykke"
      },
      {
        "code" : "vaskulaer",
        "display" : "Vaskulære årsager"
      }]
    }]
  }
}

```
