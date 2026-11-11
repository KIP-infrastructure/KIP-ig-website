# Ingvinalhernie specificering - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ingvinalhernie specificering**

## ValueSet: Ingvinalhernie specificering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IngvinalhernieSpecificering | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:IngvinalhernieSpecificering |

 
Ingvinalhernie specificering 

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
  "id" : "IngvinalhernieSpecificering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IngvinalhernieSpecificering",
  "version" : "2.27.2",
  "name" : "IngvinalhernieSpecificering",
  "title" : "Ingvinalhernie specificering",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Ingvinalhernie specificering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "TUL9B",
        "display" : "Medialt"
      },
      {
        "code" : "TUL9A",
        "display" : "Lateralt"
      },
      {
        "code" : "TUL7",
        "display" : "Kan ikke specificeres"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "medial_lateral",
        "display" : "Sadelhernie (medialt + lateralt)"
      }]
    }]
  }
}

```
