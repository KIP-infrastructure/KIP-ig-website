# Dom - Ophævelse, årsag (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Ophævelse, årsag (RETSPSYK)**

## ValueSet: Dom - Ophævelse, årsag (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomOphaevelseAarsagRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-10-03 | *Computable Name*:DomOphaevelseAarsagRETSPSYK |

 
Dom - Ophævelse, årsag (RETSPSYK) 

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
  "id" : "DomOphaevelseAarsagRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomOphaevelseAarsagRETSPSYK",
  "version" : "2.27.0",
  "name" : "DomOphaevelseAarsagRETSPSYK",
  "title" : "Dom - Ophævelse, årsag (RETSPSYK)",
  "status" : "active",
  "date" : "2022-10-03T00:00:00+02:00",
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
  "description" : "Dom - Ophævelse, årsag (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "criminality",
        "display" : "Dom ophæves pga. ny kriminalitet, men ingen ny foranstaltning i psykiatrien"
      },
      {
        "code" : "criminality_measure",
        "display" : "Dom ophæves pga. ny kriminalitet og ny foranstaltning i psykiatrien"
      },
      {
        "code" : "expire",
        "display" : "Dom ophæves / udløbet (ingen ny kriminalitet)"
      }]
    }]
  }
}

```
