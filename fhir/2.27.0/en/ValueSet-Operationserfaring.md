# Operationserfaring - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationserfaring**

## ValueSet: Operationserfaring 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Operationserfaring | *Version*:2.27.0 |
| Active as of 2024-02-14 | *Computable Name*:Operationserfaring |

 
Operationserfaring for operatører og assistenter 

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
  "id" : "Operationserfaring",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Operationserfaring",
  "version" : "2.27.0",
  "name" : "Operationserfaring",
  "title" : "Operationserfaring",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Operationserfaring for operatører og assistenter",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring",
      "concept" : [{
        "code" : "le10",
        "display" : "A (0-10)"
      },
      {
        "code" : "11-25",
        "display" : "B (11-25)"
      },
      {
        "code" : "26-50",
        "display" : "C (26-50)"
      },
      {
        "code" : "51-75",
        "display" : "D (51-75)"
      },
      {
        "code" : "76-100",
        "display" : "E (76-100)"
      },
      {
        "code" : "gt100",
        "display" : "F (>100)"
      }]
    }]
  }
}

```
