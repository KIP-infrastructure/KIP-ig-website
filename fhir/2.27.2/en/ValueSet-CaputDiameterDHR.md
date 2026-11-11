# Caput Diameter - (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caput Diameter - (DHR)**

## ValueSet: Caput Diameter - (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CaputDiameterDHR | *Version*:2.27.2 |
| Active as of 2023-05-23 | *Computable Name*:CaputDiameterDHR |

 
Caput Diameter - (DHR) 

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
  "id" : "CaputDiameterDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CaputDiameterDHR",
  "version" : "2.27.2",
  "name" : "CaputDiameterDHR",
  "title" : "Caput Diameter - (DHR)",
  "status" : "active",
  "date" : "2023-05-23T00:00:00+02:00",
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
  "description" : "Caput Diameter - (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SizesGeneral",
      "concept" : [{
        "code" : "28",
        "display" : "28"
      },
      {
        "code" : "32",
        "display" : "32"
      },
      {
        "code" : "36",
        "display" : "36"
      },
      {
        "code" : "40",
        "display" : "40"
      },
      {
        "code" : "44",
        "display" : "44"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
