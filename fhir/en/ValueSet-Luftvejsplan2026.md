# Luftvejsplan 2026 - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Luftvejsplan 2026**

## ValueSet: Luftvejsplan 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Luftvejsplan2026 | *Version*:2.27.2 |
| Retired as of 2022-06-01 | *Computable Name*:Luftvejsplan2026 |

 
Mulige planlagte indgreb til luftvejsunderstøttelse 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "Luftvejsplan2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Luftvejsplan2026",
  "version" : "2.27.2",
  "name" : "Luftvejsplan2026",
  "title" : "Luftvejsplan 2026",
  "status" : "retired",
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
  "description" : "Mulige planlagte indgreb til luftvejsunderstøttelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
      "concept" : [{
        "code" : "spontane_resp",
        "display" : "Spontan respiration"
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
        "code" : "intub_dir_laryngo",
        "display" : "Intubation ved direkte laryngoskopi"
      },
      {
        "code" : "intub_video_laryngo",
        "display" : "Intubation med videolaryngoskopi"
      },
      {
        "code" : "intub_flex_skop",
        "display" : "Intubation med fleksibelt skop"
      },
      {
        "code" : "intub_diff",
        "display" : "Intubation ved anden metode"
      },
      {
        "code" : "tracheostomi_loc",
        "display" : "Tracheostomi i lokalanæstesi"
      },
      {
        "code" : "is_intub_trach",
        "display" : "Ikke relevant / Er intuberet/tracheostomeret"
      }]
    }]
  }
}

```
