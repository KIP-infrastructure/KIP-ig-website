# Doed lokation - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Doed lokation**

## ValueSet: Doed lokation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedLokation | *Version*:2.27.2 |
| Active as of 2022-09-07 | *Computable Name*:DoedLokation |

 
Hvor døde patienten 

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
  "id" : "DoedLokation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedLokation",
  "version" : "2.27.2",
  "name" : "DoedLokation",
  "title" : "Doed lokation",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Hvor døde patienten",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DeathPlace",
      "concept" : [{
        "code" : "home",
        "display" : "Hjemmet"
      },
      {
        "code" : "palliative",
        "display" : "I denne palliative afdeling"
      },
      {
        "code" : "other_palliative",
        "display" : "I anden palliativ afdeling"
      },
      {
        "code" : "non_palliative",
        "display" : "Ikke-palliativ sygehusafdeling"
      },
      {
        "code" : "relief_area",
        "display" : "Aflastningsplads"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet sted/ukendt"
      }]
    }]
  }
}

```
