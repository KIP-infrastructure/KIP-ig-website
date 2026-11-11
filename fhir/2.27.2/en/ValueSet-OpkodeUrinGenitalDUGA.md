# Operationskode - Urin-inkontinens og genital prolaps (DUGA) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationskode - Urin-inkontinens og genital prolaps (DUGA)**

## ValueSet: Operationskode - Urin-inkontinens og genital prolaps (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinGenitalDUGA | *Version*:2.27.2 |
| Active as of 2024-02-14 | *Computable Name*:OpkodeUrinGenitalDUGA |

 
Operationskode - Urin-inkontinens og genital prolaps (DUGA) 

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
  "id" : "OpkodeUrinGenitalDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinGenitalDUGA",
  "version" : "2.27.2",
  "name" : "OpkodeUrinGenitalDUGA",
  "title" : "Operationskode - Urin-inkontinens og genital prolaps (DUGA)",
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
  "description" : "Operationskode - Urin-inkontinens og genital prolaps (DUGA)",
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
        "code" : "KLEF00",
        "display" : "KLEF00: Forreste kolporafi"
      },
      {
        "code" : "KLEF00A",
        "display" : "KLEF00A: Forreste kolporafi med meche"
      },
      {
        "code" : "KLEF03",
        "display" : "KLEF03: Bageste kolporafi"
      },
      {
        "code" : "KLEF03A",
        "display" : "KLEF03A: Bageste kolporafi med meche"
      },
      {
        "code" : "KLEF20",
        "display" : "KLEF20: Partiel kolpokleise"
      },
      {
        "code" : "KLEF40",
        "display" : "KLEF40: Vaginal operation for enterocele"
      },
      {
        "code" : "KLEF40A",
        "display" : "KLEF40A: Vaginal operation for enterocele med meche"
      },
      {
        "code" : "KLEF43",
        "display" : "KLEF43: Abdominal operation for enterocele"
      },
      {
        "code" : "KLEF43A",
        "display" : "KLEF43A: Abdominal operation for enterocele med meche"
      },
      {
        "code" : "KLEF50",
        "display" : "KLEF50: Abdominal apikal kolpopeksi efter tidligere hysterektomi"
      },
      {
        "code" : "KLEF50A",
        "display" : "KLEF50A: Abdominal apikal kolpopeksi eft. tidl. hysterektomi m. meche"
      },
      {
        "code" : "KLEF51",
        "display" : "KLEF51: Laparoskopisk apikal kolpopeksi efter tidligere hysterektomi"
      },
      {
        "code" : "KLEF51A",
        "display" : "KLEF51A: Laparoskop. apikal kolpopeksi eft.tidl. hysterektomi m. meche"
      },
      {
        "code" : "KLEF53",
        "display" : "KLEF53: Vaginal apikal kolpopeksi efter tidligere hysterektomi"
      },
      {
        "code" : "KLEF53A",
        "display" : "KLEF53A: Vaginal apikal kolpopeksi efter tidl. hysterektomi med meche"
      },
      {
        "code" : "KLEF53B",
        "display" : "KLEF53B: Vaginal apikal kolpopeksi til det sakrospinøse ligament"
      },
      {
        "code" : "KLEF60",
        "display" : "KLEF60: Vaginal lateral kolpopeksi"
      },
      {
        "code" : "KLEF63",
        "display" : "KLEF63: Abdominal lateral kolpopeksi"
      },
      {
        "code" : "KLCG20",
        "display" : "KLCG20: Hysteropeksi"
      },
      {
        "code" : "KLCG21",
        "display" : "KLCG21: Laparoskopisk hysteropeksi"
      },
      {
        "code" : "KLCG21A",
        "display" : "KLCG21A: Laparoskopisk hysteropeksi med mesh"
      },
      {
        "code" : "KLCD10",
        "display" : "KLCD10: Vaginal hysterektomi"
      },
      {
        "code" : "KLDC10",
        "display" : "KLDC10: Resektion af livmoderhals"
      },
      {
        "code" : "KLED00",
        "display" : "KLED00: Kolpektomi"
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
