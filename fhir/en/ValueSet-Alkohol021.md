# Alkohol 0-21 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alkohol 0-21**

## ValueSet: Alkohol 0-21 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Alkohol021 | *Version*:2.27.1 |
| Active as of 2022-06-15 | *Computable Name*:Alkohol021 |

 
0, 1-21 eller flere genstande per uge 

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
  "id" : "Alkohol021",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Alkohol021",
  "version" : "2.27.1",
  "name" : "Alkohol021",
  "title" : "Alkohol 0-21",
  "status" : "active",
  "date" : "2022-06-15T00:00:00+02:00",
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
  "description" : "0, 1-21 eller flere genstande per uge",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Alchohol",
      "concept" : [{
        "code" : "0",
        "display" : "Ingen alkohol"
      },
      {
        "code" : "1-21",
        "display" : "1-21 genstande per uge"
      },
      {
        "code" : "gt21",
        "display" : "Mere end 21 genstande per uge"
      }]
    }]
  }
}

```
