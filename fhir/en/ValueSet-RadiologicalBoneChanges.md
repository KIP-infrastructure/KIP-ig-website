# Knogle forandringer - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knogle forandringer**

## ValueSet: Knogle forandringer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RadiologicalBoneChanges | *Version*:2.27.3 |
| Active as of 2022-07-14 | *Computable Name*:RadiologicalBoneChanges |

 
Radiologiske knogleforandringer 

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
  "id" : "RadiologicalBoneChanges",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RadiologicalBoneChanges",
  "version" : "2.27.3",
  "name" : "RadiologicalBoneChanges",
  "title" : "Knogle forandringer",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Radiologiske knogleforandringer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen knogleforandringer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges",
      "concept" : [{
        "code" : "diffuse_halisteresis",
        "display" : "Diffus halisterese (som eneste forandring)"
      },
      {
        "code" : "few",
        "display" : "Enkelte knogleforandr. i én/enkelte region(er)"
      },
      {
        "code" : "multiple",
        "display" : "Multiple knogleforandr. i én/flere regioner"
      }]
    }]
  }
}

```
