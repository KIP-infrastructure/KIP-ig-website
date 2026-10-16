# Cytogenetiske forandringer - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetiske forandringer**

## ValueSet: Cytogenetiske forandringer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticChanges | *Version*:2.27.0 |
| Active as of 2022-07-15 | *Computable Name*:CytogeneticChanges |

 
Cytogenetiske forandringer 

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
  "id" : "CytogeneticChanges",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticChanges",
  "version" : "2.27.0",
  "name" : "CytogeneticChanges",
  "title" : "Cytogenetiske forandringer",
  "status" : "active",
  "date" : "2022-07-15T00:00:00+02:00",
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
  "description" : "Cytogenetiske forandringer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticChanges",
      "concept" : [{
        "code" : "hyperdiploidy",
        "display" : "Hyperdiploid"
      },
      {
        "code" : "hypodiploidy",
        "display" : "Hypodiploid"
      },
      {
        "code" : "pseudodiploidy",
        "display" : "Pseudodiploid"
      }]
    }]
  }
}

```
