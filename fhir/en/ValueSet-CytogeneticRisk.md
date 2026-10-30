# Cytogenetiske risici - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetiske risici**

## ValueSet: Cytogenetiske risici 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRisk | *Version*:2.27.1 |
| Active as of 2022-07-12 | *Computable Name*:CytogeneticRisk |

 
Cytogenetiske fund / risiko vudering 

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
  "id" : "CytogeneticRisk",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRisk",
  "version" : "2.27.1",
  "name" : "CytogeneticRisk",
  "title" : "Cytogenetiske risici",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Cytogenetiske fund / risiko vudering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "high",
        "display" : "Good risk (Y-, del5q, del20q, normal)"
      },
      {
        "code" : "normal",
        "display" : "Intermediær risk (alle øvrige)"
      },
      {
        "code" : "low",
        "display" : "Poor risk (> 3 kromosomforandringer, kromosom 7 aberrationer)"
      },
      {
        "code" : "not_performed",
        "display" : "Ej udført"
      }]
    }]
  }
}

```
