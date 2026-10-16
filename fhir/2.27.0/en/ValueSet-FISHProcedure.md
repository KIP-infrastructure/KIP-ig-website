# FISH plasma identifikation - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FISH plasma identifikation**

## ValueSet: FISH plasma identifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FISHProcedure | *Version*:2.27.0 |
| Active as of 2022-07-15 | *Computable Name*:FISHProcedure |

 
FISH plasma identifikation 

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
  "id" : "FISHProcedure",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FISHProcedure",
  "version" : "2.27.0",
  "name" : "FISHProcedure",
  "title" : "FISH plasma identifikation",
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
  "description" : "FISH plasma identifikation",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FISHVariables",
      "concept" : [{
        "code" : "cd138_sort",
        "display" : "plasmacelleindentifikation (CD138 sort)"
      },
      {
        "code" : "antibodies",
        "display" : "plasmacelleindentifikation (antistof)"
      },
      {
        "code" : "plasma_cell_identifikation_unspecific",
        "display" : "plasmacelleindentifikation (anden)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "uden plasmacelleidentifikation"
      }]
    }]
  }
}

```
