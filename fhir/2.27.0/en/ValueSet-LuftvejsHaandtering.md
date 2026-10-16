# Luftvejshåndtering - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Luftvejshåndtering**

## ValueSet: Luftvejshåndtering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandtering | *Version*:2.27.0 |
| Active as of 2022-06-01 | *Computable Name*:LuftvejsHaandtering |

 
Anvendte indgreb til luftvejsunderstøttelse 

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
  "id" : "LuftvejsHaandtering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandtering",
  "version" : "2.27.0",
  "name" : "LuftvejsHaandtering",
  "title" : "Luftvejshåndtering",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Anvendte indgreb til luftvejsunderstøttelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
      "concept" : [{
        "code" : "spontane_resp_only",
        "display" : "KUN spontan respiration"
      },
      {
        "code" : "mask_vent",
        "display" : "Maskeventilation"
      },
      {
        "code" : "larynx_all",
        "display" : "Larynxmaske (alle typer)"
      },
      {
        "code" : "intubation",
        "display" : "Intubation"
      },
      {
        "code" : "tracheostomi",
        "display" : "Tracheostomi"
      },
      {
        "code" : "is_intub_trach",
        "display" : "Ikke relevant / pt er intuberet/tracheostomeret"
      }]
    }]
  }
}

```
