# ATC_CLL_immunterapi - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC_CLL_immunterapi**

## ValueSet: ATC_CLL_immunterapi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCImmunotherapyCLL | *Version*:2.27.1 |
| Active as of 2022-07-13 | *Computable Name*:ATCImmunotherapyCLL |

 
ATC koder immunterapi - [CLL] 

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
  "id" : "ATCImmunotherapyCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCImmunotherapyCLL",
  "version" : "2.27.1",
  "name" : "ATCImmunotherapyCLL",
  "title" : "ATC_CLL_immunterapi",
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
  "description" : "ATC koder immunterapi - [CLL]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen immunterapi"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L04AA34",
        "display" : "Alemtuzumab"
      },
      {
        "code" : "L01FA01",
        "display" : "Rituximab"
      },
      {
        "code" : "L01FA02",
        "display" : "Ofatumumab"
      },
      {
        "code" : "L01FA03",
        "display" : "Obinutuzumab"
      }]
    }]
  }
}

```
