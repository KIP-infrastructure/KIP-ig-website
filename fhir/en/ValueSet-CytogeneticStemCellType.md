# Stamcelle type - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stamcelle type**

## ValueSet: Stamcelle type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticStemCellType | *Version*:2.27.3 |
| Active as of 2022-07-13 | *Computable Name*:CytogeneticStemCellType |

 
Hvor kommer stamcellerne fra 

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
  "id" : "CytogeneticStemCellType",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticStemCellType",
  "version" : "2.27.3",
  "name" : "CytogeneticStemCellType",
  "title" : "Stamcelle type",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Hvor kommer stamcellerne fra",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/StemCellType",
      "concept" : [{
        "code" : "bone_marrow",
        "display" : "Knoglemarv"
      },
      {
        "code" : "peripheral_blood",
        "display" : "Perifert blod"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
