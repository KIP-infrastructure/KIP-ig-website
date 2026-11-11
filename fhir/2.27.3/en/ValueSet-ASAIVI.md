# ASA klassifikation I-VI - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA klassifikation I-VI**

## ValueSet: ASA klassifikation I-VI 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ASAIVI | *Version*:2.27.3 |
| Active as of 2022-06-14 | *Computable Name*:ASAIVI |

 
ASA klassifikation I-VI 

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
  "id" : "ASAIVI",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ASAIVI",
  "version" : "2.27.3",
  "name" : "ASAIVI",
  "title" : "ASA klassifikation I-VI",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "ASA klassifikation I-VI",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification",
      "concept" : [{
        "code" : "asai",
        "display" : "ASA I - Fortrinlig"
      },
      {
        "code" : "asaii",
        "display" : "ASA II - God"
      },
      {
        "code" : "asaiii",
        "display" : "ASA III - Moderat påvirket"
      },
      {
        "code" : "asaiv",
        "display" : "ASA IV - Dårlig"
      },
      {
        "code" : "asav",
        "display" : "ASA V - Yderst ringe"
      },
      {
        "code" : "asavi",
        "display" : "ASA VI - Erklæret hjernedød"
      }]
    }]
  }
}

```
