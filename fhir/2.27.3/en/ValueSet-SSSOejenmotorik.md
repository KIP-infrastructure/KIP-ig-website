# Scandinavian Stroke Scale - Øjenmotorik - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Øjenmotorik**

## ValueSet: Scandinavian Stroke Scale - Øjenmotorik 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSOejenmotorik | *Version*:2.27.3 |
| Active as of 2022-06-23 | *Computable Name*:SSSOejenmotorik |

 
Scandinavian Stroke Scale - Øjenmotorik 

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
  "id" : "SSSOejenmotorik",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSOejenmotorik",
  "version" : "2.27.3",
  "name" : "SSSOejenmotorik",
  "title" : "Scandinavian Stroke Scale - Øjenmotorik",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Øjenmotorik",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSEyeMotorSkills",
      "concept" : [{
        "code" : "4",
        "display" : "4: ingen blikparese "
      },
      {
        "code" : "2",
        "display" : "2: blikparese til stede"
      },
      {
        "code" : "0",
        "display" : "0: konjugeret blikdeviation"
      }]
    }]
  }
}

```
