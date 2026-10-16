# Undersøgelsestype (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undersøgelsestype (DUGA)**

## ValueSet: Undersøgelsestype (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UndersoegelsesTypeDUGA | *Version*:2.27.0 |
| Active as of 2024-03-06 | *Computable Name*:UndersoegelsesTypeDUGA |

 
Undersøgelsestype (DUGA) 

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
  "id" : "UndersoegelsesTypeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UndersoegelsesTypeDUGA",
  "version" : "2.27.0",
  "name" : "UndersoegelsesTypeDUGA",
  "title" : "Undersøgelsestype (DUGA)",
  "status" : "active",
  "date" : "2024-03-06T00:00:00+02:00",
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
  "description" : "Undersøgelsestype (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/UndersoegelsesTypeDUGA",
      "concept" : [{
        "code" : "urin_inkontinens",
        "display" : "Urin inkontinens"
      },
      {
        "code" : "genital_prolaps",
        "display" : "Genital prolaps"
      }]
    }]
  }
}

```
