# Kognitiv påvirkning (DANDEM) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kognitiv påvirkning (DANDEM)**

## ValueSet: Kognitiv påvirkning (DANDEM) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KognitivPaavirkningDANDEM | *Version*:2.27.1 |
| Active as of 2022-07-19 | *Computable Name*:KognitivPaavirkningDANDEM |

 
Kognitiv påvirkning (DANDEM) 

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
  "id" : "KognitivPaavirkningDANDEM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KognitivPaavirkningDANDEM",
  "version" : "2.27.1",
  "name" : "KognitivPaavirkningDANDEM",
  "title" : "Kognitiv påvirkning (DANDEM)",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Kognitiv påvirkning (DANDEM)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CognitiveFunctionFinding",
      "concept" : [{
        "code" : "normal",
        "display" : "Habituel kognitiv funktion"
      },
      {
        "code" : "impaired",
        "display" : "Kognitiv svækkelse, men ikke dement"
      },
      {
        "code" : "mild",
        "display" : "Demens i let grad jævnfør (ICD kriterier)"
      },
      {
        "code" : "moderate",
        "display" : "Demens i moderat grad jævnfør (ICD kriterier)"
      },
      {
        "code" : "severe",
        "display" : "Demens i svær grad jævnfør (ICD kriterier)"
      }]
    }]
  }
}

```
