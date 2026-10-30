# ATC_CLL_target - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC_CLL_target**

## ValueSet: ATC_CLL_target 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCTargetCLL | *Version*:2.27.1 |
| Active as of 2022-07-13 | *Computable Name*:ATCTargetCLL |

 
ATC koder targeteret behandling - [CLL] 

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
  "id" : "ATCTargetCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCTargetCLL",
  "version" : "2.27.1",
  "name" : "ATCTargetCLL",
  "title" : "ATC_CLL_target",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "ATC koder targeteret behandling - [CLL]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "other",
        "display" : "Anden pathway inhibitor"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L01EL01",
        "display" : "Ibrutinib"
      },
      {
        "code" : "L01EM01",
        "display" : "Idelalisib"
      },
      {
        "code" : "L01XX52",
        "display" : "Venetoclax"
      },
      {
        "code" : "L01EL02",
        "display" : "Acalabrutinib"
      }]
    }]
  }
}

```
