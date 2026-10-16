# Operationskode - Urin-inkontinens (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationskode - Urin-inkontinens (DUGA)**

## ValueSet: Operationskode - Urin-inkontinens (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinInkontinensDUGA | *Version*:2.27.0 |
| Active as of 2024-02-14 | *Computable Name*:OpkodeUrinInkontinensDUGA |

 
Operationskode - Urin-inkontinens (DUGA) 

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
  "id" : "OpkodeUrinInkontinensDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinInkontinensDUGA",
  "version" : "2.27.0",
  "name" : "OpkodeUrinInkontinensDUGA",
  "title" : "Operationskode - Urin-inkontinens (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Operationskode - Urin-inkontinens (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "KKDG00",
        "display" : "KKDG00: Retropubisk supension af urinrør"
      },
      {
        "code" : "KKDG30",
        "display" : "KKDG30: Abdominal uretrocystopeksi med slynge"
      },
      {
        "code" : "KKDV22",
        "display" : "KKDV22: Uretroskopisk submukøs injektionsbehandling i urinrør"
      },
      {
        "code" : "KLEG10",
        "display" : "KLEG10: Vaginal uretrocystopeksi med slynge"
      },
      {
        "code" : "KLEG10A",
        "display" : "KLEG10A: Vaginal uretrocystopeksi med slynge gennem foramen obturatum"
      },
      {
        "code" : "KLEE00",
        "display" : "KLEE00: Sutur af vagina"
      },
      {
        "code" : "KLFE00",
        "display" : "KLFE00: Sutur af vulva"
      },
      {
        "code" : "KLFE96",
        "display" : "KLFE96: Anden rekonstruktion på vulva eller perineum"
      },
      {
        "code" : "KJHC10",
        "display" : "KJHC10: Rekonstruktion af sphincter ani"
      },
      {
        "code" : "KUKC02",
        "display" : "KUKC02: Cystoskopi"
      },
      {
        "code" : "KZXF84A",
        "display" : "KZXF84A: Ikke resorberbar sutur"
      },
      {
        "code" : "KZXF84B",
        "display" : "KZXF84B: Korttidsresorberbar sutur (< 3 uger)"
      },
      {
        "code" : "KZXF84C",
        "display" : "KZXF84C: Forsinket resorberbar sutur"
      },
      {
        "code" : "KZXX00",
        "display" : "KZXX00: Anvendelse af robot"
      }]
    }]
  }
}

```
