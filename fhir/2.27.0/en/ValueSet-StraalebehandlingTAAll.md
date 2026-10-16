# Strålebehandlinger mål - alle - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Strålebehandlinger mål - alle**

## ValueSet: Strålebehandlinger mål - alle 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StraalebehandlingTAAll | *Version*:2.27.0 |
| Active as of 2022-05-16 | *Computable Name*:StraalebehandlingTAAll |

 
Alle mål for strålebehandling 

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
  "id" : "StraalebehandlingTAAll",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StraalebehandlingTAAll",
  "version" : "2.27.0",
  "name" : "StraalebehandlingTAAll",
  "title" : "Strålebehandlinger mål - alle",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Alle mål for strålebehandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/StraalebehandlingTA",
      "concept" : [{
        "code" : "priTum",
        "display" : "Primær tumor"
      },
      {
        "code" : "kngTast",
        "display" : "Knoglemetastase"
      },
      {
        "code" : "cns",
        "display" : "CNS"
      },
      {
        "code" : "anden",
        "display" : "Anden/Ikke specificeret"
      }]
    }]
  }
}

```
