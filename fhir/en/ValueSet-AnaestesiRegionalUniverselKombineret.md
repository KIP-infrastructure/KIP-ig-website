# Anæstesi - Regional, universel, kombineret - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi - Regional, universel, kombineret**

## ValueSet: Anæstesi - Regional, universel, kombineret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnaestesiRegionalUniverselKombineret | *Version*:2.27.0 |
| Active as of 2022-10-13 | *Computable Name*:AnaestesiRegionalUniverselKombineret |

 
Anæstesi - Regional, universel, kombineret 

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
  "id" : "AnaestesiRegionalUniverselKombineret",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnaestesiRegionalUniverselKombineret",
  "version" : "2.27.0",
  "name" : "AnaestesiRegionalUniverselKombineret",
  "title" : "Anæstesi - Regional, universel, kombineret",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Anæstesi - Regional, universel, kombineret",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "regional",
        "display" : "Regional (spinal/epidural)"
      },
      {
        "code" : "universal",
        "display" : "Universel"
      },
      {
        "code" : "combined",
        "display" : "Kombineret"
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
