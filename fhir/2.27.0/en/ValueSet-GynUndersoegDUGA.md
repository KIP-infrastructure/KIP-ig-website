# Gynækologisk undersøgelsesmetode (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gynækologisk undersøgelsesmetode (DUGA)**

## ValueSet: Gynækologisk undersøgelsesmetode (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GynUndersoegDUGA | *Version*:2.27.0 |
| Active as of 2024-02-13 | *Computable Name*:GynUndersoegDUGA |

 
Gynækologisk undersøgelsesmetode (DUGA) 

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
  "id" : "GynUndersoegDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GynUndersoegDUGA",
  "version" : "2.27.0",
  "name" : "GynUndersoegDUGA",
  "title" : "Gynækologisk undersøgelsesmetode (DUGA)",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Gynækologisk undersøgelsesmetode (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GynUndersoegDUGA",
      "concept" : [{
        "code" : "popq",
        "display" : "POPQ"
      },
      {
        "code" : "hymscore",
        "display" : "Undersøg score (i forhold til hymenal plan)"
      }]
    }]
  }
}

```
