# UndersøgendeLAB - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UndersøgendeLAB**

## ValueSet: UndersøgendeLAB 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UndersoendeLAB | *Version*:2.27.3 |
| Active as of 2024-05-27 | *Computable Name*:UndersoendeLAB |

 
UndersøgendeLAB 

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
  "id" : "UndersoendeLAB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UndersoendeLAB",
  "version" : "2.27.3",
  "name" : "UndersoendeLAB",
  "title" : "UndersøgendeLAB",
  "status" : "active",
  "date" : "2024-05-27T00:00:00+02:00",
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
  "description" : "UndersøgendeLAB",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "682641000016004",
        "display" : "Afdeling for blodprøver og biokemi, Aarhus Universitetshospital"
      },
      {
        "code" : "256631000016003",
        "display" : "Afdeling for Klinisk Biokemi – Blegdamsvej"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden afdeling"
      }]
    }]
  }
}

```
