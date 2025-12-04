# Procedurekoder - Urogynækologi (DUGA) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedurekoder - Urogynækologi (DUGA)**

## CodeSystem: Procedurekoder - Urogynækologi (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn | *Version*:2.16.0 |
| Active as of 2024-02-14 | *Computable Name*:ProcedureUrogyn |

 
Procedurekoder - Urogynækolog (DUGA) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KomplAndreDiagDUGA](ValueSet-KomplAndreDiagDUGA.md)
* [KomplAndreProcDUGA](ValueSet-KomplAndreProcDUGA.md)
* [KomplBlaereDiagDUGA](ValueSet-KomplBlaereDiagDUGA.md)
* [KomplBlaereProcDUGA](ValueSet-KomplBlaereProcDUGA.md)
* [KomplBloedDiagDUGA](ValueSet-KomplBloedDiagDUGA.md)
* [KomplBloedProcDUGA](ValueSet-KomplBloedProcDUGA.md)
* [KomplInfektionDiagDUGA](ValueSet-KomplInfektionDiagDUGA.md)
* [KomplInfektionProcDUGA](ValueSet-KomplInfektionProcDUGA.md)
* [KomplOrganperfDiagDUGA](ValueSet-KomplOrganperfDiagDUGA.md)
* [KomplOrganperfProcDUGA](ValueSet-KomplOrganperfProcDUGA.md)
* [OpkodeGenitalProlapsDUGA](ValueSet-OpkodeGenitalProlapsDUGA.md)
* [OpkodeUrinGenitalDUGA](ValueSet-OpkodeUrinGenitalDUGA.md)
* [OpkodeUrinInkontinensDUGA](ValueSet-OpkodeUrinInkontinensDUGA.md)
* [PerforationDUGA](ValueSet-PerforationDUGA.md)
* [SuspensionDUGA](ValueSet-SuspensionDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureUrogyn",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
  "version" : "2.16.0",
  "name" : "ProcedureUrogyn",
  "title" : "Procedurekoder - Urogynækologi (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Procedurekoder - Urogynækolog (DUGA)",
  "content" : "complete",
  "count" : 80,
  "concept" : [
    {
      "code" : "KKDG00",
      "display" : "Retropubisk supension af urinrør",
      "definition" : "Retropubisk supension af urinrør"
    },
    {
      "code" : "KKDG30",
      "display" : "Abdominal uretrocystopeksi med slynge",
      "definition" : "Abdominal uretrocystopeksi med slynge"
    },
    {
      "code" : "KKDV22",
      "display" : "Uretroskopisk submukøs injektionsbehandling i urinrør",
      "definition" : "Uretroskopisk submukøs injektionsbehandling i urinrør"
    },
    {
      "code" : "KLEG10",
      "display" : "Vaginal uretrocystopeksi med slynge",
      "definition" : "Vaginal uretrocystopeksi med slynge"
    },
    {
      "code" : "KLEG10A",
      "display" : "Vaginal uretrocystopeksi med slynge gennem foramen obturatum",
      "definition" : "Vaginal uretrocystopeksi med slynge gennem foramen obturatum"
    },
    {
      "code" : "KLEF00",
      "display" : "Forreste kolporafi",
      "definition" : "Forreste kolporafi"
    },
    {
      "code" : "KLEF00A",
      "display" : "Forreste kolporafi med meche",
      "definition" : "Forreste kolporafi med meche"
    },
    {
      "code" : "KLEF03",
      "display" : "Bageste kolporafi",
      "definition" : "Bageste kolporafi"
    },
    {
      "code" : "KLEF03A",
      "display" : "Bageste kolporafi med meche",
      "definition" : "Bageste kolporafi med meche"
    },
    {
      "code" : "KLEF20",
      "display" : "Partiel kolpokleise",
      "definition" : "Partiel kolpokleise"
    },
    {
      "code" : "KLEF40",
      "display" : "Vaginal operation for enterocele",
      "definition" : "Vaginal operation for enterocele"
    },
    {
      "code" : "KLEF40A",
      "display" : "Vaginal operation for enterocele med meche",
      "definition" : "Vaginal operation for enterocele med meche"
    },
    {
      "code" : "KLEF43",
      "display" : "Abdominal operation for enterocele",
      "definition" : "Abdominal operation for enterocele"
    },
    {
      "code" : "KLEF43A",
      "display" : "Abdominal operation for enterocele med meche",
      "definition" : "Abdominal operation for enterocele med meche"
    },
    {
      "code" : "KLEF50",
      "display" : "Abdominal apikal kolpopeksi efter tidligere hysterektomi",
      "definition" : "Abdominal apikal kolpopeksi efter tidligere hysterektomi"
    },
    {
      "code" : "KLEF50A",
      "display" : "Abdominal apikal kolpopeksi eft. tidl. hysterektomi m. meche",
      "definition" : "Abdominal apikal kolpopeksi eft. tidl. hysterektomi m. meche"
    },
    {
      "code" : "KLEF51",
      "display" : "Laparoskopisk apikal kolpopeksi efter tidligere hysterektomi",
      "definition" : "Laparoskopisk apikal kolpopeksi efter tidligere hysterektomi"
    },
    {
      "code" : "KLEF51A",
      "display" : "Laparoskop. apikal kolpopeksi eft.tidl. hysterektomi m. meche",
      "definition" : "Laparoskop. apikal kolpopeksi eft.tidl. hysterektomi m. meche"
    },
    {
      "code" : "KLEF53",
      "display" : "Vaginal apikal kolpopeksi efter tidligere hysterektomi",
      "definition" : "Vaginal apikal kolpopeksi efter tidligere hysterektomi"
    },
    {
      "code" : "KLEF53A",
      "display" : "Vaginal apikal kolpopeksi efter tidl. hysterektomi med meche",
      "definition" : "Vaginal apikal kolpopeksi efter tidl. hysterektomi med meche"
    },
    {
      "code" : "KLEF53B",
      "display" : "Vaginal apikal kolpopeksi til det sakrospinøse ligament",
      "definition" : "Vaginal apikal kolpopeksi til det sakrospinøse ligament"
    },
    {
      "code" : "KLEF60",
      "display" : "Vaginal lateral kolpopeksi",
      "definition" : "Vaginal lateral kolpopeksi"
    },
    {
      "code" : "KLEF63",
      "display" : "Abdominal lateral kolpopeksi",
      "definition" : "Abdominal lateral kolpopeksi"
    },
    {
      "code" : "KLCG20",
      "display" : "Hysteropeksi",
      "definition" : "Hysteropeksi"
    },
    {
      "code" : "KLCG21",
      "display" : "Laparoskopisk hysteropeksi",
      "definition" : "Laparoskopisk hysteropeksi"
    },
    {
      "code" : "KLCG21A",
      "display" : "Laparoskopisk hysteropeksi med mesh",
      "definition" : "Laparoskopisk hysteropeksi med mesh"
    },
    {
      "code" : "KLCD10",
      "display" : "Vaginal hysterektomi",
      "definition" : "Vaginal hysterektomi"
    },
    {
      "code" : "KLDC10",
      "display" : "Resektion af livmoderhals",
      "definition" : "Resektion af livmoderhals"
    },
    {
      "code" : "KLED00",
      "display" : "Kolpektomi",
      "definition" : "Kolpektomi"
    },
    {
      "code" : "KZLA01",
      "display" : "Suspension af vaginaltop a.m. McCall",
      "definition" : "Suspension af vaginaltop a.m. McCall"
    },
    {
      "code" : "KZLA02",
      "display" : "Suspension af vaginaltop a.m. Bob Shull",
      "definition" : "Suspension af vaginaltop a.m. Bob Shull"
    },
    {
      "code" : "KLEE00",
      "display" : "Sutur af vagina",
      "definition" : "Sutur af vagina"
    },
    {
      "code" : "KLFE00",
      "display" : "Sutur af vulva",
      "definition" : "Sutur af vulva"
    },
    {
      "code" : "KLFE96",
      "display" : "Anden rekonstruktion på vulva eller perineum",
      "definition" : "Anden rekonstruktion på vulva eller perineum"
    },
    {
      "code" : "KJHC10",
      "display" : "Rekonstruktion af sphincter ani",
      "definition" : "Rekonstruktion af sphincter ani"
    },
    {
      "code" : "KUKC02",
      "display" : "Cystoskopi",
      "definition" : "Cystoskopi"
    },
    {
      "code" : "KZXF84A",
      "display" : "Ikke resorberbar sutur",
      "definition" : "Ikke resorberbar sutur"
    },
    {
      "code" : "KZXF84B",
      "display" : "Korttidsresorberbar sutur (< 3 uger)",
      "definition" : "Korttidsresorberbar sutur (< 3 uger)"
    },
    {
      "code" : "KZXF84C",
      "display" : "Forsinket resorberbar sutur",
      "definition" : "Forsinket resorberbar sutur"
    },
    {
      "code" : "KZXX00",
      "display" : "Anvendelse af robot",
      "definition" : "Anvendelse af robot"
    },
    {
      "code" : "DN393",
      "display" : "Stress-inkontinens",
      "definition" : "Stress-inkontinens"
    },
    {
      "code" : "DN895D",
      "display" : "Vaginal striktur",
      "definition" : "Vaginal striktur"
    },
    {
      "code" : "DR102B",
      "display" : "Mavesmerter lokaliseret til bækken",
      "definition" : "Mavesmerter lokaliseret til bækken"
    },
    {
      "code" : "DR339D",
      "display" : "Residualurin",
      "definition" : "Residualurin"
    },
    {
      "code" : "DR391",
      "display" : "Vandladningsbesvær UNS",
      "definition" : "Vandladningsbesvær UNS"
    },
    {
      "code" : "DR522B",
      "display" : "Smerter i kønsorganer",
      "definition" : "Smerter i kønsorganer"
    },
    {
      "code" : "DT810G",
      "display" : "Postoperativ blødning UNS",
      "definition" : "Postoperativ blødning UNS"
    },
    {
      "code" : "DT810H",
      "display" : "Postoperativt hæmatom UNS",
      "definition" : "Postoperativt hæmatom UNS"
    },
    {
      "code" : "DT812G",
      "display" : "Utilsigtet peroperativ punktur eller læsion af gastrointestinalkanalen",
      "definition" : "Utilsigtet peroperativ punktur eller læsion af gastrointestinalkanalen"
    },
    {
      "code" : "DT812H",
      "display" : "Utilsigtet peroperativ punktur eller læsion af kvindeligt kønsorgan",
      "definition" : "Utilsigtet peroperativ punktur eller læsion af kvindeligt kønsorgan"
    },
    {
      "code" : "DT812UC",
      "display" : "Utilsigtet peroperativ punktur eller læsion af urinleder",
      "definition" : "Utilsigtet peroperativ punktur eller læsion af urinleder"
    },
    {
      "code" : "DT812UD",
      "display" : "Utilsigtet peroperativ punktur eller læsion af urinblære",
      "definition" : "Utilsigtet peroperativ punktur eller læsion af urinblære"
    },
    {
      "code" : "DT812UE",
      "display" : "Utilsigtet peroperativ punktur eller læsion af urinrør",
      "definition" : "Utilsigtet peroperativ punktur eller læsion af urinrør"
    },
    {
      "code" : "DT814F",
      "display" : "Postoperativ sårinfektion",
      "definition" : "Postoperativ sårinfektion"
    },
    {
      "code" : "DT814U",
      "display" : "Postoperativ urinvejsinfektion",
      "definition" : "Postoperativ urinvejsinfektion"
    },
    {
      "code" : "DT818F",
      "display" : "Peroperativ blødning UNS",
      "definition" : "Peroperativ blødning UNS"
    },
    {
      "code" : "DT835",
      "display" : "Infektion eller inflammation omkring protese, implantat eller transplantat i urinvejene",
      "definition" : "Infektion eller inflammation omkring protese, implantat eller transplantat i urinvejene"
    },
    {
      "code" : "DT836",
      "display" : "Infektion eller inflammation omkring protese, implantat eller transplantat i kønsorganerne",
      "definition" : "Infektion eller inflammation omkring protese, implantat eller transplantat i kønsorganerne"
    },
    {
      "code" : "DT983C",
      "display" : "Postoperativ seksuel dysfunktion",
      "definition" : "Postoperativ seksuel dysfunktion"
    },
    {
      "code" : "KKBF00",
      "display" : "Fjernelse af fremmedlegeme i urinleder",
      "definition" : "Fjernelse af fremmedlegeme i urinleder"
    },
    {
      "code" : "KKCF01",
      "display" : "Perkutan endoskopisk fjernelse af fremmedlegeme i urinblære",
      "definition" : "Perkutan endoskopisk fjernelse af fremmedlegeme i urinblære"
    },
    {
      "code" : "KKDE20",
      "display" : "Fjernelse af fremmedlegeme fra urinrør",
      "definition" : "Fjernelse af fremmedlegeme fra urinrør"
    },
    {
      "code" : "KLWB00",
      "display" : "Reoperation ved overfladisk infektion efter gynækologisk operation",
      "definition" : "Reoperation ved overfladisk infektion efter gynækologisk operation"
    },
    {
      "code" : "KLWC00",
      "display" : "Reoperation ved dyb infektion efter gynækologisk operation",
      "definition" : "Reoperation ved dyb infektion efter gynækologisk operation"
    },
    {
      "code" : "KLWC01",
      "display" : "Laparoskopisk reoperation ved dyb infektion efter gynækologisk operation",
      "definition" : "Laparoskopisk reoperation ved dyb infektion efter gynækologisk operation"
    },
    {
      "code" : "KLWD00",
      "display" : "Reoperation for overfladisk blødning efter gynækologisk operation",
      "definition" : "Reoperation for overfladisk blødning efter gynækologisk operation"
    },
    {
      "code" : "KLWE00",
      "display" : "Reoperation for dyb blødning efter gynækologisk operation",
      "definition" : "Reoperation for dyb blødning efter gynækologisk operation"
    },
    {
      "code" : "KLWE01",
      "display" : "Laparoskopisk reoperation for dyb blødning efter gynækologisk operation",
      "definition" : "Laparoskopisk reoperation for dyb blødning efter gynækologisk operation"
    },
    {
      "code" : "KLWW96",
      "display" : "Anden reoperation efter gynækologisk operation",
      "definition" : "Anden reoperation efter gynækologisk operation"
    },
    {
      "code" : "KLWW96A",
      "display" : "Fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation",
      "definition" : "Fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
    },
    {
      "code" : "KLWW97A",
      "display" : "Laparoskopisk fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation",
      "definition" : "Laparoskopisk fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
    },
    {
      "code" : "KTLE10",
      "display" : "Fjernelse af fremmedlegeme fra vagina",
      "definition" : "Fjernelse af fremmedlegeme fra vagina"
    },
    {
      "code" : "KTLW99A",
      "display" : "Løsning eller overskæring af vaginal slynge",
      "definition" : "Løsning eller overskæring af vaginal slynge"
    },
    {
      "code" : "KTLW99B",
      "display" : "Stramning af vaginal slynge",
      "definition" : "Stramning af vaginal slynge"
    },
    {
      "code" : "BJAA0",
      "display" : "Engangskateterisation af blæren",
      "definition" : "Engangskateterisation af blæren"
    },
    {
      "code" : "BJAZ0",
      "display" : "Anlæggelse af blærekateter",
      "definition" : "Anlæggelse af blærekateter"
    },
    {
      "code" : "BJKA02",
      "display" : "Vejledning og undervisning i selvkateterisation",
      "definition" : "Vejledning og undervisning i selvkateterisation"
    },
    {
      "code" : "BOQA0",
      "display" : "Blodtransfusion",
      "definition" : "Blodtransfusion"
    },
    {
      "code" : "BPH",
      "display" : "Systemisk antibiotikabehandling af infektionssygdomme",
      "definition" : "Systemisk antibiotikabehandling af infektionssygdomme"
    },
    {
      "code" : "ZZ1295",
      "display" : "Væske og vandladningsskema",
      "definition" : "Væske og vandladningsskema"
    }
  ]
}

```
