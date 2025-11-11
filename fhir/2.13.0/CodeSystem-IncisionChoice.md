# Incision choice - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Incision choice**

## CodeSystem: Incision choice 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice | *Version*:2.13.0 |
| Active as of 2022-06-03 | *Computable Name*:IncisionChoice |

 
Incisionsvalg eller operativ adgang 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Incisionsvalg](ValueSet-Incisionsvalg.md)
* [KirurgiskAdgangDSR](ValueSet-KirurgiskAdgangDSR.md)
* [OperativAdgangDKR](ValueSet-OperativAdgangDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IncisionChoice",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
  "version" : "2.13.0",
  "name" : "IncisionChoice",
  "title" : "Incision choice",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Incisionsvalg eller operativ adgang",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 20,
  "concept" : [
    {
      "code" : "abdomnial",
      "display" : "Abdominal adgang",
      "definition" : "Abdominal adgang"
    },
    {
      "code" : "abdominal_thoracic",
      "display" : "Separat abdominal og torakal adgang",
      "definition" : "Separat abdominal og torakal adgang"
    },
    {
      "code" : "toracoabdominal",
      "display" : "Torakabdominal adgang",
      "definition" : "Torakabdominal adgang med deling af diafragma"
    },
    {
      "code" : "transhiatal_siewert",
      "display" : "Transhiatal adgang (a.m. Siewert)",
      "definition" : "Transhiatal adgang (a.m. Siewert)"
    },
    {
      "code" : "transhiatal_neck",
      "display" : "Transhiatal adgang og anastomose på hals",
      "definition" : "Transhiatal adgang og anastomose på hals"
    },
    {
      "code" : "abdominal_thoracoskopic",
      "display" : "Separat abdominal & torakoskopisk",
      "definition" : "Separat abdominal & torakoskopisk"
    },
    {
      "code" : "laparoscopic_thoracoskopic",
      "display" : "Laparoskopisk & torakoskopisk",
      "definition" : "Laparoskopisk & torakoskopisk"
    },
    {
      "code" : "laparoscopic_thoracotomy",
      "display" : "Laparoskopisk & separat torakotomi",
      "definition" : "Laparoskopisk & separat torakotomi"
    },
    {
      "code" : "laparoscopic",
      "display" : "Laparoskopisk",
      "definition" : "Laparoskopisk"
    },
    {
      "code" : "endoscopic",
      "display" : "Endoskopisk",
      "definition" : "Endoskopisk"
    },
    {
      "code" : "cervical",
      "display" : "Cervikal adgang",
      "definition" : "Cervikal adgang (frit tyndtarmstransplantat)"
    },
    {
      "code" : "delto_pectoral",
      "display" : "Delto-pectoral",
      "definition" : "Delto-pectoral"
    },
    {
      "code" : "mackenzie",
      "display" : "Antero-superior (MacKenzie)",
      "definition" : "Antero-superior (MacKenzie)"
    },
    {
      "code" : "lateral_for_patella",
      "display" : "Lateral for patella",
      "definition" : "Lateral for patella"
    },
    {
      "code" : "medial_for_patella",
      "display" : "Medial for patella",
      "definition" : "Medial for patella"
    },
    {
      "code" : "medial_parapatellar_quadriceps",
      "display" : "Medial parapatellar, gennem quadricepssenen",
      "definition" : "Medial parapatellar, gennem quadricepssenen"
    },
    {
      "code" : "medial_parapatellar_vastus_medialis",
      "display" : "Medial parapatellar, vastus medialis split",
      "definition" : "Medial parapatellar, vastus medialis split"
    },
    {
      "code" : "center_quadriceps",
      "display" : "Midtlinie, gennem quadricepssenen",
      "definition" : "Midtlinie, gennem quadricepssenen"
    },
    {
      "code" : "center_vastus_medialis",
      "display" : "Midtlinie, vastus medialis split",
      "definition" : "Midtlinie, vastus medialis split"
    },
    {
      "code" : "minimal_invasive",
      "display" : "Minimal invasiv kirurgi",
      "definition" : "Minimal invasiv kirurgi"
    }
  ]
}

```
