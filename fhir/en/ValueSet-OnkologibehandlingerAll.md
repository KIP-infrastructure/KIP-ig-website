# Onkologibehandlinger - alle - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Onkologibehandlinger - alle**

## ValueSet: Onkologibehandlinger - alle 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OnkologibehandlingerAll | *Version*:2.27.0 |
| Active as of 2022-04-28 | *Computable Name*:OnkologibehandlingerAll |

 
Dette er alle typer af onkologibehandlinger 

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
  "id" : "OnkologibehandlingerAll",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OnkologibehandlingerAll",
  "version" : "2.27.0",
  "name" : "OnkologibehandlingerAll",
  "title" : "Onkologibehandlinger - alle",
  "status" : "active",
  "date" : "2022-04-28T00:00:00+02:00",
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
  "description" : "Dette er alle typer af onkologibehandlinger",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Onkologibehandling",
      "concept" : [{
        "code" : "kurativ",
        "display" : "Kurativ"
      },
      {
        "code" : "palliativ",
        "display" : "Palliativ"
      },
      {
        "code" : "ingen",
        "display" : "Ingen"
      }]
    }]
  }
}

```
