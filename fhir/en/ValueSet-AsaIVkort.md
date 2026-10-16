# ASA klassifikation I-V Kort - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA klassifikation I-V Kort**

## ValueSet: ASA klassifikation I-V Kort 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AsaIVkort | *Version*:2.27.0 |
| Active as of 2022-10-19 | *Computable Name*:AsaIVkort |

 
ASA klassifikation: De udvalgte koder for ASA fra I-V i kort version 

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
  "id" : "AsaIVkort",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AsaIVkort",
  "version" : "2.27.0",
  "name" : "AsaIVkort",
  "title" : "ASA klassifikation I-V Kort",
  "status" : "active",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "ASA klassifikation: De udvalgte koder for ASA fra I-V i kort version",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification",
      "concept" : [{
        "code" : "asai",
        "display" : "ASA I"
      },
      {
        "code" : "asaii",
        "display" : "ASA II"
      },
      {
        "code" : "asaiii",
        "display" : "ASA III"
      },
      {
        "code" : "asaiv",
        "display" : "ASA IV"
      },
      {
        "code" : "asav",
        "display" : "ASA V"
      }]
    }]
  }
}

```
