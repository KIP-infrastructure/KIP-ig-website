# Fødselssted (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fødselssted (RETSPSYK)**

## ValueSet: Fødselssted (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FoedselsstedRETSPSYK | *Version*:2.27.3 |
| Active as of 2022-09-30 | *Computable Name*:FoedselsstedRETSPSYK |

 
Fødselssted (RETSPSYK) 

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
  "id" : "FoedselsstedRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FoedselsstedRETSPSYK",
  "version" : "2.27.3",
  "name" : "FoedselsstedRETSPSYK",
  "title" : "Fødselssted (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Fødselssted (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Birthplace",
      "concept" : [{
        "code" : "DK",
        "display" : "Danmark"
      },
      {
        "code" : "west",
        "display" : "Vesten"
      },
      {
        "code" : "eastern_europe",
        "display" : "Østeuropa"
      },
      {
        "code" : "IR",
        "display" : "Iran"
      },
      {
        "code" : "middle_east",
        "display" : "Mellemøsten"
      },
      {
        "code" : "north_africa",
        "display" : "Nordafrika"
      },
      {
        "code" : "africa",
        "display" : "Afrika - øvrige"
      },
      {
        "code" : "far_east",
        "display" : "Fjernøsten"
      },
      {
        "code" : "rest_of_world",
        "display" : "Resten af verden"
      },
      {
        "code" : "GL",
        "display" : "Grønland"
      }]
    }]
  }
}

```
