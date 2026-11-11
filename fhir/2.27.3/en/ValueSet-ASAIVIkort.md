# ASA klassifikation I-VI Kort - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA klassifikation I-VI Kort**

## ValueSet: ASA klassifikation I-VI Kort 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ASAIVIkort | *Version*:2.27.3 |
| Active as of 2022-10-19 | *Computable Name*:ASAIVIkort |

 
ASA klassifikation I-VI i kort version 

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
  "id" : "ASAIVIkort",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ASAIVIkort",
  "version" : "2.27.3",
  "name" : "ASAIVIkort",
  "title" : "ASA klassifikation I-VI Kort",
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
  "description" : "ASA klassifikation I-VI i kort version",
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
      },
      {
        "code" : "asavi",
        "display" : "ASA VI"
      }]
    }]
  }
}

```
