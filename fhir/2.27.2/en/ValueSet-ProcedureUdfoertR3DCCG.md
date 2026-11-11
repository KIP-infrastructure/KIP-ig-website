# Udført procedure R3 (DCCG) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udført procedure R3 (DCCG)**

## ValueSet: Udført procedure R3 (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR3DCCG | *Version*:2.27.2 |
| Active as of 2023-03-02 | *Computable Name*:ProcedureUdfoertR3DCCG |

 
Udført procedure R3 (DCCG) 

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
  "id" : "ProcedureUdfoertR3DCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR3DCCG",
  "version" : "2.27.2",
  "name" : "ProcedureUdfoertR3DCCG",
  "title" : "Udført procedure R3 (DCCG)",
  "status" : "active",
  "date" : "2023-03-02T00:00:00+02:00",
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
  "description" : "Udført procedure R3 (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "polypectomy",
        "display" : "Polypektomi"
      },
      {
        "code" : "emr",
        "display" : "EMR inkl. piecemeal EMR"
      },
      {
        "code" : "esd",
        "display" : "ESD inkl. piecemeal ESD"
      },
      {
        "code" : "piecemeal_resection",
        "display" : "Piecemeal resektion"
      },
      {
        "code" : "full_wall_resection",
        "display" : "Endoskopisk fuldvægsresektion"
      },
      {
        "code" : "other_endoscopic",
        "display" : "Anden endoskopisk procedure"
      }]
    }]
  }
}

```
